<?php

namespace App\Models;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use Sushi;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $rows = [
        [
            'title' => 'Livewire 3',
            'video' => 'U-N8Qqq02b0',
            'image' => 'https://i.ytimg.com/vi/U-N8Qqq02b0/sddefault.jpg',
            'duration_in_seconds' => 2608,
            'published_at' => '2023-07-25T14:09:06Z',
        ],
        [
            'title' => 'Unveiling NativePHP',
            'video' => 'iG7VscBFnqo',
            'image' => 'https://i.ytimg.com/vi/iG7VscBFnqo/sddefault.jpg',
            'duration_in_seconds' => 1912,
            'published_at' => '2023-07-26T16:24:26Z',
        ],
        [
            'title' => 'State of Laravel',
            'video' => '1P3wLy49t2c',
            'image' => 'https://i.ytimg.com/vi/1P3wLy49t2c/sddefault.jpg',
            'duration_in_seconds' => 3561,
            'published_at' => '2023-07-24T15:28:32Z',
        ],
        [
            'title' => 'Unveiling Laravel Prompts',
            'video' => 'PW-2_-KxF-8',
            'image' => 'https://i.ytimg.com/vi/PW-2_-KxF-8/sddefault.jpg',
            'duration_in_seconds' => 2118,
            'published_at' => '2023-05-24 10:00:00',
        ],
    ];

    public function getDurationAttribute()
    {
        return vsprintf('%sm %ss', [
            floor($this->duration_in_seconds / 60),
            $this->duration_in_seconds % 60,
        ]);
    }
}
