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
}
