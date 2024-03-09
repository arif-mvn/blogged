<?php

use Illuminate\Support\Facades\Route;

Route::get('/c', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', [\Arifulislamrana\Blogged\BlogController::class, 'add']);

Route::group([
    'prefix'     => '/admin/blog',
    'middleware' => []
], function () {
    Route::get('/blogs', []);
    Route::post('/blogs', []);
    Route::put('/blogs/{id}', []);
    Route::delete('/blogs/{id}', []);
});
