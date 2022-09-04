<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;

// home route
Route::get('/', [StoryController::class, 'index'])->name('home');

// show search result
Route::get('/story/search-results', [StoryController::class, 'search'])->name('search');

// story details
Route::get('/story/{id}', [StoryController::class, 'find'])->name('details');

// show create new story
Route::get('/publish-new', [StoryController::class, 'create'])->name('publishNew')->middleware('auth');

// store new story
Route::post('/store-new', [StoryController::class, 'store'])->name('newStory')->middleware('auth');

// show edit form view
Route::get('/story/edit/{id}', [StoryController::class, 'edit'])->name('editStory')->middleware('auth');

// update story
Route::put('/story/update/{story}', [StoryController::class, 'update'])->name('updateStory')->middleware('auth');

// delete story
Route::delete('/story/delete/{story}', [StoryController::class, 'delete'])->name('deleteStory')->middleware('auth');

// show register form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

// create users
Route::post('/user', [UserController::class, 'store'])->name('userCreate')->middleware('guest');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login submit
Route::post('/user/authenticate', [UserController::class, 'authenticate'])->name('authenticate')->middleware('guest');

// logout user
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// manage my stories
Route::get('/manage-story', [StoryController::class, 'manage'])->name('manageStory')->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');