<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'Main@index')->name('home');

Route::middleware('auth')->group(function(){
  Route::get('libros', 'Books@index');
  Route::get('libros/insertar', 'Books@insert');

  Route::post('libros', 'Books@create');
  Route::get('libros/{id}', 'Books@select')->where('id', '[0-9]+');
  Route::delete('libros/{id}', 'Books@delete')->where('id', '[0-9]+');
  Route::put('libros/{id}', 'Books@update')->where('id', '[0-9]+');
});

Auth::routes();

Route::get('rating', 'Rating@index');
Route::get('rating/{id}', 'Rating@detalle');
Route::post('rating/{id}', 'Rating@votar')->middleware('auth');
Route::put('rating/{id}', 'Rating@actualizar')->middleware('auth');

