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

Route::group(['middleware' => 'guest'], function () {
    // show register form
    Route::get('/register', [UserController::class, 'create'])->name('register');

    // create users
    Route::post('/user', [UserController::class, 'store'])->name('userCreate');

    // show login form
    Route::get('/login', [UserController::class, 'login'])->name('login');

    // login submit
    Route::post('/user/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'auth'], function () {
    
    // logout user
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // manage my stories
    Route::get('/manage-story', [StoryController::class, 'manage'])->name('manageStory');

    // show create new story
    Route::get('/publish-new', [StoryController::class, 'create'])->name('publishNew');

    // store new story
    Route::post('/store-new', [StoryController::class, 'store'])->name('newStory');

    // show edit form view
    Route::get('/story/edit/{id}', [StoryController::class, 'edit'])->name('editStory');

    // update story
    Route::put('/story/update/{story}', [StoryController::class, 'update'])->name('updateStory');

    // delete story
    Route::delete('/story/delete/{story}', [StoryController::class, 'delete'])->name('deleteStory');

});

// about
Route::get('/about', function () {
    return view('about');
})->name('about');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');