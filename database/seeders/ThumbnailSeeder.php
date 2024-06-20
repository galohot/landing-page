<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Thumbnail;

class ThumbnailSeeder extends Seeder
{
    public function run()
    {
        Thumbnail::create([
            'is_active' => 1,
            'section_id' => 2,
            'thumbnail_path' => '01J0QTT97VAC9KJ3VYPH0XV9NZ.jpg',
            'created_at' => '2024-06-19 08:46:34',
            'updated_at' => '2024-06-19 08:46:34'
        ]);
        Thumbnail::create([
            'is_active' => 1,
            'section_id' => 3,
            'thumbnail_path' => '01J0R9HM0GF68FRW234A2EC06A.jpg',
            'created_at' => '2024-06-19 13:03:59',
            'updated_at' => '2024-06-19 14:15:49'
        ]);
        Thumbnail::create([
            'is_active' => 1,
            'section_id' => 4,
            'thumbnail_path' => '01J0RDRKH0F3ZK4Q49CVCK0H6N.png',
            'created_at' => '2024-06-19 14:17:42',
            'updated_at' => '2024-06-19 14:17:42'
        ]);
        Thumbnail::create([
            'is_active' => 1,
            'section_id' => 6,
            'thumbnail_path' => '01J0RF3GK5AFCE41B7PY223G6R.png',
            'created_at' => '2024-06-19 14:41:08',
            'updated_at' => '2024-06-19 14:41:08'
        ]);
        Thumbnail::create([
            'is_active' => 1,
            'section_id' => 7,
            'thumbnail_path' => '01J0RF7NQ1056FEG4R6NHG1FCT.png',
            'created_at' => '2024-06-19 14:42:21',
            'updated_at' => '2024-06-19 14:42:21'
        ]);
    }
}
