<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware("auth")->group(function() {
    Route::get('/songs', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
    Route::post('/playlist/addToPlaylist', [App\Http\Controllers\PlaylistController::class, 'addToPlaylist'])->name('playlist.addsong');
    Route::get('/playlists', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlists');
    Route::get('/playlists/getAllPlaylists', [App\Http\Controllers\PlaylistController::class, 'getAllPlaylists']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/', function () {
        return view('dashboard');
    }) ->name('dashboard');
});


