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
        $id = DB::table('songs')->insertGetId([
            'title' => "Maths",
            'duration' => 415,
        ]);

        DB::table('artist_song')->insert([
            'artist_id' => ArtistSeeder::$id,
            'song_id' => $id
        ]);

        DB::table('songs')->insert([
            'title' => "Strobe",
            'duration' => 634,
        ]);

        DB::table('songs')->insert([
            'title' => "Zenith",
            'duration' => 208,
        ]);

        DB::table('songs')->insert([
            'title' => "Project Ledg 2024",
            'duration' => 144,
        ]);

        DB::table('songs')->insert([
            'title' => "ACID",
            'duration' => 142,
        ]);
    }
}
