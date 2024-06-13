<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\DB;


class PlaylistController extends Controller
{
    public function index()
    {
        // get all playlists
        $playlists = Playlist::all();
        return view('playlists.index', ['playlists' => $playlists]);
    }

    public function addToPlaylist(Request $request)
    {
        $request->replace(array_values($request->except('_token')));
        $request->validate(["*" => ["exists:".Song::class.",".app(Song::class)->getKeyName()]]);
        $array = $request->input();
        $playlist = Playlist::first();
        $songs = Song::findMany($array);
        foreach($songs as $song)
        {
            $song->playlists()->attach($playlist);

        }
    }


    public function getAllPlaylists()
    {
        $playlists = DB::table('users')->get();
    }
}
