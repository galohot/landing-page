<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    public function run()
    {
        Site::create([
            'site_logo' => '01J0QSTASFTZR0S7J3GYGM68DC.png',
            'footer_text' => 'Copyright, Pusat TIK Kementerian dan Perwakilan ||DEVELOPMENT ENVIRONMENT',
            'created_at' => '2024-06-19 08:29:07',
            'updated_at' => '2024-06-19 08:29:07'
        ]);
    }
}