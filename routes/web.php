<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/experience', 'experience');
Route::view('/projects', 'projects');
Route::view('/certificates', 'certificates');
Route::view('/contact', 'contact');