<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function getDurationStringAttribute()
    {
        $timeString = gmdate("i:s", $this->duration);
        return $timeString[0] === '0' ? substr($timeString, 1) : $timeString;

    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
