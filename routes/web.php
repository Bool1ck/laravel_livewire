<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\LinesOfCode\Counter;

Route::view('/', 'welcome');
Route::view('/test', 'test');

Route::livewire('/counter', 'counter-component')->middleware('auth');

Route::livewire('/post', 'pages::app.post.page')->middleware('auth');

Route::livewire('/posts', 'pages::app.post.index')->middleware('auth')->name('post.index');
Route::livewire('/posts/{id}', 'pages::app.post.show')->middleware('auth')->name('post.show');

Route::livewire('/admin/posts/index', 'pages::admin.post.index')->middleware('auth')->name('admin.post.index');
Route::livewire('/admin/posts/create', 'pages::admin.post.create')->middleware('auth')->name('admin.post.create');
Route::livewire('/admin/posts/{id}/edit', 'pages::admin.post.edit')->middleware('auth')->name('admin.post.edit');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
