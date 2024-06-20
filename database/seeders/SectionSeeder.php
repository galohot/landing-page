<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    public function run()
    {
        Section::create([
            'id' => 2,
            'sequence' => 1,
            'title' => 'Hero',
            'description' => '2024 Indonesia Africa Forum and High Level Forum on Multi Stakeholder Partnership',
            'content' => '2024 Indonesia Africa Forum and High Level Forum on Multi Stakeholder Partnership Content',
            'link' => 'about',
            'section_color' => '#2D3985',
            'has_image' => 1,
            'main_image' => '01J0SNVPQSHZWT2YE4T2Q676WV.jpg',
            'created_at' => '2024-06-18 21:42:58',
            'updated_at' => '2024-06-19 18:58:27',
        ]);
        Section::create([
            'id' => 3,
            'sequence' => 2,
            'title' => 'About IAF',
            'description' => 'About IAF',
            'content' => 'Indonesia and Africa have enjoyed a strong relationship since the 1955 Asia-Africa Conference...',
            'link' => 'about',
            'section_color' => '#5e7dba',
            'has_image' => 1,
            'main_image' => '01J0SPH7GENSWVD3EGSAVPQAB1.jpg',
            'created_at' => '2024-06-18 21:43:28',
            'updated_at' => '2024-06-19 19:21:03',
        ]);
        Section::create([
            'id' => 4,
            'sequence' => 3,
            'title' => 'About MSP',
            'description' => 'About MSP',
            'content' => 'About MSP',
            'link' => 'google.com',
            'section_color' => '#b82626',
            'has_image' => 1,
            'main_image' => '01J0SPHR5EX6W249SB504T4922.jpg',
            'created_at' => '2024-06-19 02:45:59',
            'updated_at' => '2024-06-19 19:10:29',
        ]);
        Section::create([
            'id' => 6,
            'sequence' => 4,
            'title' => 'details 1',
            'description' => 'Objective 1',
            'content' => 'Objective 1 Description',
            'link' => 'google.com',
            'section_color' => '#702929',
            'has_image' => 1,
            'main_image' => '01J0SPJACYCBEA9CFGS8Z6GMCZ.png',
            'created_at' => '2024-06-19 07:22:33',
            'updated_at' => '2024-06-19 19:10:48',
        ]);
        Section::create([
            'id' => 7,
            'sequence' => 4,
            'title' => 'details 2',
            'description' => 'Objective 2',
            'content' => 'Objective 2 Description',
            'link' => 'google.com',
            'section_color' => '#5e2121',
            'has_image' => 1,
            'main_image' => '01J0SPK7R83WQJ5DCCSSFX73XQ.png',
            'created_at' => '2024-06-19 07:23:18',
            'updated_at' => '2024-06-19 19:11:18',
        ]);
        Section::create([
            'id' => 8,
            'sequence' => 4,
            'title' => 'details 3',
            'description' => 'Objective 3',
            'content' => 'Objective 3 Description',
            'link' => 'google.com',
            'section_color' => '#cf5252',
            'has_image' => 1,
            'main_image' => '01J0SPKR2ZG7QH78NZNQHX8D0P.png',
            'created_at' => '2024-06-19 07:23:56',
            'updated_at' => '2024-06-19 19:11:35',
        ]);
        Section::create([
            'id' => 9,
            'sequence' => 4,
            'title' => 'details 4',
            'description' => 'Objective 4',
            'content' => 'Objective 4 Description',
            'link' => 'google.com',
            'section_color' => '#5c1616',
            'has_image' => 1,
            'main_image' => '01J0SPM8A146NXDFQW4WNGFZ0T.png',
            'created_at' => '2024-06-19 07:24:21',
            'updated_at' => '2024-06-19 19:11:51',
        ]);
        Section::create([
            'id' => 10,
            'sequence' => 5,
            'title' => 'Portfolio 1',
            'description' => 'Portfolio 1',
            'content' => 'Portfolio 1',
            'link' => 'google.com',
            'section_color' => '#4d2b2b',
            'has_image' => 1,
            'main_image' => '01J0SPNHQ2F7Y658WT923QS3VY.jpg',
            'created_at' => '2024-06-19 07:56:08',
            'updated_at' => '2024-06-19 19:12:34',
        ]);
        Section::create([
            'id' => 15,
            'sequence' => 5,
            'title' => 'Portfolio 2',
            'description' => 'Portfolio 2',
            'content' => 'Portfolio 2',
            'link' => 'google.com',
            'section_color' => '#6480e3',
            'has_image' => 1,
            'main_image' => '01J0SPRZYXWT6BP5N0K43K0PRP.jpg',
            'created_at' => '2024-06-19 08:00:52',
            'updated_at' => '2024-06-19 19:14:27',
        ]);
        Section::create([
            'id' => 12,
            'sequence' => 5,
            'title' => 'Portfolio 3',
            'description' => 'Portfolio 3',
            'content' => 'Portfolio 3',
            'link' => 'google.com',
            'section_color' => '#28a886',
            'has_image' => 1,
            'main_image' => '01J0SPPGS56GYVRJWKAQ7317KX.png',
            'created_at' => '2024-06-19 07:57:35',
            'updated_at' => '2024-06-19 19:13:05',
        ]);
        Section::create([
            'id' => 13,
            'sequence' => 5,
            'title' => 'Portfolio 4',
            'description' => 'Portfolio 4',
            'content' => 'Portfolio 4',
            'link' => 'google.com',
            'section_color' => '#82793c',
            'has_image' => 1,
            'main_image' => '01J0SPQ3D0AQ2CZYBSRBZYGYMY.png',
            'created_at' => '2024-06-19 07:58:38',
            'updated_at' => '2024-06-19 19:13:25',
        ]);
        Section::create([
            'id' => 14,
            'sequence' => 5,
            'title' => 'Portfolio 5',
            'description' => 'Portfolio 5',
            'content' => 'Portfolio 5',
            'link' => 'google.com',
            'section_color' => '#692828',
            'has_image' => 1,
            'main_image' => '01J0SPR8TJM4HN4D8W77RTS11X.jpg',
            'created_at' => '2024-06-19 07:59:17',
            'updated_at' => '2024-06-19 19:14:03',
        ]);
        Section::create([
            'id' => 11,
            'sequence' => 5,
            'title' => 'Portfolio 6',
            'description' => 'Portfolio 6',
            'content' => 'Portfolio 6',
            'link' => 'google.com',
            'section_color' => '#6828a8',
            'has_image' => 1,
            'main_image' => '01J0SPP2RPJXA264NCST0CYSEY.jpg',
            'created_at' => '2024-06-19 07:57:04',
            'updated_at' => '2024-06-19 19:12:51',
        ]);
    }
}