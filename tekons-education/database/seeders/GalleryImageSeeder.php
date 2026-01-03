<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GalleryImage::create([
            'title' => 'Image 1',
            'description' => 'This is the first image.',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Image+1',
        ]);

        GalleryImage::create([
            'title' => 'Image 2',
            'description' => 'This is the second image.',
            'image' => 'https://via.placeholder.com/640x480.png/0077ff?text=Image+2',
        ]);
    }
}
