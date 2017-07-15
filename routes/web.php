<?php

Route::get('/notas', 'NotasController@notas');
Route::get('/mostrar_notas', 'NotasController@mostrarNotas');
Route::post('/guardar_nota', 'NotasController@guardarNota');
Route::post('eliminar_nota', 'NotasController@eliminarNota');