<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/login', function () {
    return view('login');
})->name('login');
