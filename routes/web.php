<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\LinesOfCode\Counter;

Route::view('/', 'welcome');
Route::view('/test', 'test');

Route::livewire('/counter', 'counter-component')->middleware('auth');

Route::livewire('/posts', 'pages::post.page')->middleware('auth');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
