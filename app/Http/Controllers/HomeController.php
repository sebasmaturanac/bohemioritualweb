<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $youtubeLives = Cache::remember('bohemio_youtube_lives_v4', now()->addHours(6), function () {
            $apiKey = config('services.youtube.api_key');
            $channelId = config('services.youtube.channel_id');

            if (!$apiKey || !$channelId) {
                return collect();
            }

            $channelResponse = Http::get('https://www.googleapis.com/youtube/v3/channels', [
                'key' => $apiKey,
                'id' => $channelId,
                'part' => 'contentDetails',
            ]);

            if (!$channelResponse->successful()) {
                return collect();
            }

            $uploadsPlaylistId = data_get($channelResponse->json(), 'items.0.contentDetails.relatedPlaylists.uploads');

            if (!$uploadsPlaylistId) {
                return collect();
            }

            $playlistResponse = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
                'key' => $apiKey,
                'playlistId' => $uploadsPlaylistId,
                'part' => 'snippet,contentDetails',
                'maxResults' => 12,
            ]);

            if (!$playlistResponse->successful()) {
                return collect();
            }

            $items = collect($playlistResponse->json('items', []));

            $videoIds = $items
                ->pluck('contentDetails.videoId')
                ->filter()
                ->values()
                ->implode(',');

            if (!$videoIds) {
                return collect();
            }

            $videosResponse = Http::get('https://www.googleapis.com/youtube/v3/videos', [
                'key' => $apiKey,
                'id' => $videoIds,
                'part' => 'snippet,contentDetails,statistics,liveStreamingDetails',
            ]);

            if (!$videosResponse->successful()) {
                return collect();
            }

            return collect($videosResponse->json('items', []))
                ->filter(function ($video) {
                    $title = Str::lower(data_get($video, 'snippet.title', ''));
                    $description = Str::lower(data_get($video, 'snippet.description', ''));

                    return Str::contains($title, [
                            'vivo',
                            'en vivo',
                            'bohemio ritual',
                            'meli',
                            'puesteros',
                            'tiki',
                        ])
                        || Str::contains($description, [
                            'vivo',
                            'en vivo',
                            'bohemio ritual',
                        ])
                        || data_get($video, 'liveStreamingDetails.actualStartTime');
                })
                ->map(function ($video) {
                    $videoId = $video['id'];
                    $snippet = $video['snippet'];
                    $contentDetails = $video['contentDetails'] ?? [];
                    $statistics = $video['statistics'] ?? [];

                    return [
                        'id' => $videoId,
                        'title' => $snippet['title'] ?? 'Bohemio Ritual en vivo',
                        'description' => $snippet['description'] ?? '',
                        'thumbnail' => $snippet['thumbnails']['maxres']['url']
                            ?? $snippet['thumbnails']['high']['url']
                            ?? $snippet['thumbnails']['medium']['url']
                            ?? $snippet['thumbnails']['default']['url']
                            ?? asset('assets/img/bohemio-logo.png'),
                        'url' => 'https://www.youtube.com/watch?v=' . $videoId,
                        'published_at' => $snippet['publishedAt'] ?? null,
                        'duration' => $this->formatYoutubeDuration($contentDetails['duration'] ?? null),
                        'views' => $statistics['viewCount'] ?? 0,
                    ];
                })
                ->values();
        });

        return view('home', compact('youtubeLives'));
    }

    private function formatYoutubeDuration(?string $duration): string
    {
        if (!$duration) {
            return '';
        }

        try {
            $interval = new \DateInterval($duration);

            $hours = $interval->h + ($interval->d * 24);
            $minutes = $interval->i;
            $seconds = $interval->s;

            if ($hours > 0) {
                return sprintf('%d:%02d:%02d', $hours, $minutes, $seconds);
            }

            return sprintf('%d:%02d', $minutes, $seconds);
        } catch (\Exception $e) {
            return '';
        }
    }
}