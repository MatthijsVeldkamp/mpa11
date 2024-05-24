<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playlists')->insert([
            'title' => "Mijn lijst",
            'creator' => "Matthijs Veldkamp",
        ]);

        DB::table('playlists')->insert([
            'title' => "Mijn iets andere lijst",
            'creator' => "Matthijs Veldkamp",
        ]);
    }
}
