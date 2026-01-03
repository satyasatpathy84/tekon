<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::create([
            'name' => 'John Doe',
            'position' => 'Founder',
            'bio' => 'This is John Doe, the founder of Tekons Education.',
        ]);

        TeamMember::create([
            'name' => 'Jane Doe',
            'position' => 'Co-Founder',
            'bio' => 'This is Jane Doe, the co-founder of Tekons Education.',
        ]);
    }
}
