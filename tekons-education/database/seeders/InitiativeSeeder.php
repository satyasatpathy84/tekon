<?php

namespace Database\Seeders;

use App\Models\Initiative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitiativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Initiative::create([
            'title' => 'Digital Literacy & STEM',
            'description' => 'For more than a decade, we have been conducting digital literacy and STEM education promotional programs in upper primary and high schools, especially in those dedicated to children of tribal communities.',
        ]);

        Initiative::create([
            'title' => 'Financial Assistance Program',
            'description' => 'Our Financial Assistance Program (FAP) is dedicated to the educational excellence of both Visually Impaired and general category students from economically weaker backgrounds.',
        ]);
    }
}
