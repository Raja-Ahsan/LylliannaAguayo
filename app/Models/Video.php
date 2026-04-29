<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get YouTube video ID from stored video_url (handles full URL or raw ID).
     */
    public function getYoutubeVideoIdAttribute(): ?string
    {
        $url = $this->attributes['video_url'] ?? '';
        if (empty($url)) {
            return null;
        }
        // Already just an ID (e.g. 11-char alphanumeric)
        if (preg_match('/^[a-zA-Z0-9_-]{10,12}$/', $url)) {
            return $url;
        }
        // youtube.com/watch?v=ID
        if (preg_match('/[?&]v=([a-zA-Z0-9_-]{10,12})/', $url, $m)) {
            return $m[1];
        }
        // youtube.com/embed/ID or youtu.be/ID
        if (preg_match('#(?:youtube\.com/embed/|youtu\.be/)([a-zA-Z0-9_-]{10,12})#', $url, $m)) {
            return $m[1];
        }
        return null;
    }

    /**
     * Get YouTube embed URL for iframe (e.g. for modal).
     */
    public function getYoutubeEmbedUrlAttribute(): ?string
    {
        $id = $this->youtube_video_id;
        return $id ? 'https://www.youtube.com/embed/' . $id : null;
    }
}
