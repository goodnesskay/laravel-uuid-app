<?php

Route::get('/', [
    'uses' => 'DogController@create'
]);

Route::post('/create/', [
    'uses' => 'DogController@store'
]);

Route::get('/list', [
    'uses' => 'DogController@show'
]);

Route::get('/edit/{id}', [
    'uses' => 'DogController@edit'
]);

Route::post('/update/{id}', [
    'uses' => 'DogController@update'
]);


