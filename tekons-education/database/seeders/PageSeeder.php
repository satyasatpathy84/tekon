<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => 'This is the about us page.',
        ]);

        Page::create([
            'title' => 'Contact Us',
            'slug' => 'contact-us',
            'content' => 'This is the contact us page.',
        ]);
    }
}
