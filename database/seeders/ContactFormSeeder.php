<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ContactForm;

class ContactFormSeeder extends Seeder
{
    public function run()
    {
        ContactForm::create([
            'fullname' => 'Dedi Irawan',
            'email' => 'irwndedi@gmail.com',
            'phone' => '085766951038',
            'message' => 'test message',
            'created_at' => '2024-06-19 15:26:01',
            'updated_at' => '2024-06-19 15:26:01'
        ]);
        ContactForm::create([
            'fullname' => 'Dedi Irawan',
            'email' => 'irwndedi@gmail.com',
            'phone' => '085766951038',
            'message' => 'tesagsadgsagasd',
            'created_at' => '2024-06-19 15:35:22',
            'updated_at' => '2024-06-19 15:35:22'
        ]);
        ContactForm::create([
            'fullname' => 'Dedi Irawan',
            'email' => 'irwndedi@gmail.com',
            'phone' => '085766951038',
            'message' => 'test3',
            'created_at' => '2024-06-19 15:38:39',
            'updated_at' => '2024-06-19 15:38:39'
        ]);
    }
}
