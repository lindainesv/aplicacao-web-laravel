<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Login;
use App\Livewire\Profile;

use App\Livewire\SearchZipcode;
use App\Livewire\Register;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return('welcome'); });
// Route::get('/login', function () { return view('auth.login'); });
// Route::get('/register', function () { return view('auth.register'); });
// Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
// Route::get('/logout', Logout::class)->name('logout');
// Route::get('/profile', function () { return view('layouts.profile'); });

Route::get('/profile', Profile::class)->name('profile');

// Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');







Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/search-zipcode', SearchZipcode::class)->name('search-zipcode');
