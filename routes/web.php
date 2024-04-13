<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página principal 'Casa'
Route::get('/', function () {
    return view('welcome', ['page' => 'casa']); // Asegúrate de que el nombre de la vista coincida con tu archivo Blade.
})->name('home');

// Ruta para la sección 'Fotos'
Route::get('/fotos', function () {
    return view('fotos', ['page' => 'fotos']); // Asegúrate de que el nombre de la vista coincida con tu archivo Blade.
})->name('photos');

// Ruta para la sección 'Contacto'
Route::get('/contacto', function () {
    return view('contacto', ['page' => 'contacto']); // Asegúrate de que el nombre de la vista coincida con tu archivo Blade.
})->name('contact');