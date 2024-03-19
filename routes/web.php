<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::get('/login', \App\Livewire\Login::class)->name('login');
