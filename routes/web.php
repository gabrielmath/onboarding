<?php

use App\Livewire\Actions\Logout;
use App\Livewire\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

/*Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::get('logout', Logout::class)->name('logout');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';
