<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistsongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playlist_song')->insert([
            'playlist_id' => 1,
            'song_id' => 1,
        ]);

        DB::table('playlist_song')->insert([
            'playlist_id' => 1,
            'song_id' => 4,
        ]);
    }
}
