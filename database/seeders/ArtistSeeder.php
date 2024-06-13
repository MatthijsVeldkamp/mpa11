<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    public static $id;
    public function run(): void
    {
        ArtistSeeder::$id = DB::table('artists')->insertGetId([
            'name' => 'deadmau5',
        ]);
    }
}
