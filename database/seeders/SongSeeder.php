<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            'title' => "Maths",
            'duration' => 415,
            'artist' => "deadmau5",
        ]);

        DB::table('songs')->insert([
            'title' => "Strobe",
            'duration' => 634,
            'artist' => "deadmau5",
        ]);

        DB::table('songs')->insert([
            'title' => "Zenith",
            'duration' => 208,
            'artist' => "4Ever",
        ]);

        DB::table('songs')->insert([
            'title' => "Project Ledg 2024",
            'duration' => 144,
            'artist' => "ASUNDER, Gutterommet",
        ]);

        DB::table('songs')->insert([
            'title' => "ACID",
            'duration' => 142,
            'artist' => "4Ever",
        ]);
    }
}
