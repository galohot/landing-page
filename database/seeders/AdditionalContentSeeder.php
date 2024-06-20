<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AdditionalContent;

class AdditionalContentSeeder extends Seeder
{
    public function run()
    {
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => '2024 Indonesia Africa Forum and High Level Forum on Multi Stakeholder Partnership Content',
            'section_id' => 1,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Indonesia and Africa have enjoyed a strong relationship since the 1955 Asia-Africa Conference...',
            'section_id' => 2,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'About MSP',
            'section_id' => 3,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Objective 1 Description',
            'section_id' => 4,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Objective 2 Description',
            'section_id' => 5,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Objective 3 Description',
            'section_id' => 6,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Objective 4 Description',
            'section_id' => 7,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Portfolio 1',
            'section_id' => 8,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Portfolio 6',
            'section_id' => 9,
        ]);
        AdditionalContent::create([
            'is_active' => 1,
            'additional_content' => 'Portfolio 3',
            'section_id' => 10,
        ]);
    }
}