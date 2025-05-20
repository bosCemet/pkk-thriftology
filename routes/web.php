<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('new');
})->name('home');

Route::get('/register', Register::class)->name('register');
Route::post('/register', [Register::class, 'register'])->name('register.post');

Route::get('/login', Login::class)->name('login');
Route::post('/login', [Login::class, 'login'])->name('login.post');

Route::get('/sell',  App\Livewire\Jual\Index::class)->name('sell');
Route::get('/products', App\Livewire\Products\Index::class)->name('products.index');
Route::get('/product/{id}', App\Livewire\Detail\Index::class)->name('show.detail');
