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
            'video' => 'IRzlxniC9Y0',
            'image' => 'https://cdn.britannica.com/49/102749-050-B4874C95/Kuala-Lumpur-Malaysia.jpg',
            'duration_in_seconds' => 2608,
            'published_at' => '2023-07-25T14:09:06Z',
        ],
        [
            'title' => 'Video 2',
            'video' => 'AnC_ET09KU',
            'image' => 'https://cdn.britannica.com/49/102749-050-B4874C95/Kuala-Lumpur-Malaysia.jpg',
            'duration_in_seconds' => 1912,
            'published_at' => '2023-07-26T16:24:26Z',
        ],
        [
            'title' => 'Video 3',
            'video' => '761x9ziWPt8',
            'image' => 'https://cdn.britannica.com/49/102749-050-B4874C95/Kuala-Lumpur-Malaysia.jpg',
            'duration_in_seconds' => 3561,
            'published_at' => '2023-07-24T15:28:32Z',
        ],
        [
            'title' => 'Video 4',
            'video' => 'K3puW7SPdFw',
            'image' => 'https://cdn.britannica.com/49/102749-050-B4874C95/Kuala-Lumpur-Malaysia.jpg',
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
