<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\InitiativeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');
Route::get('/initiatives', [InitiativeController::class, 'index'])->name('initiatives.index');
Route::get('/gallery', [GalleryImageController::class, 'index'])->name('gallery.index');
Route::get('/{page:slug}', [PageController::class, 'show'])->name('pages.show');
