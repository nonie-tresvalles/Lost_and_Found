<?php

use App\Livewire\Post\PostFound;
use App\Livewire\Post\PostLost;

use App\Livewire\Item\ItemMatched;
use App\Livewire\Item\ItemReturned;
use App\Livewire\Item\ItemFound;
use App\Livewire\Item\ItemLost;

use App\Livewire\User\UserAboutUs;
use App\Livewire\User\UserDashboard;

use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegister;
use App\Livewire\Auth\AuthTerms;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name('login');
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/terms', AuthTerms::class)->name('terms');

Route::get('/dashboard', UserDashboard::class)->name('dashboard');
Route::get('/about-us', UserAboutUs::class)->name('about-us');

Route::get('/ilost', ItemLost::class)->name('ilost');
Route::get('/ifound', ItemFound::class)->name('ifound');
Route::get('/ireturned', ItemReturned::class)->name('ireturned');
Route::get('/imatched', ItemMatched::class)->name('imatched');

Route::get('/plost', PostLost::class)->name('plost');
Route::get('/pfound', PostFound::class)->name('pfound');