<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//colegio
Route::get('experiencia', function () {
    return view('experiencia');
})->name('experiencia');

//barberia
Route::get('desarrollo', function () {
    return view('desarrollo');
})->name('desarrollo');

//biblioteca
Route::get('hobbie', function () {
    return view('hobbie');
})->name('hobbie');

//floreria
Route::get('estilo', function () {
    return view('estilo');
})->name('estilo');

//restaurante
Route::get('viajes', function () {
    return view('viajes');
})->name('viajes');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');
