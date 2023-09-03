<?php

use App\Livewire\SearchZipcode;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/app', SearchZipcode::class)->name('search-zipcode');
