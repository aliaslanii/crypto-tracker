<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');


Route::get('dashboard',App\Livewire\V1\Dashboard\Index::class)->name('dashboard')->middleware('auth');


require __DIR__.'/auth.php';
