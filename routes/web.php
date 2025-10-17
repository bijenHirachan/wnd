<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/storage', function(){
   echo Illuminate\Support\Facades\Artisan::call('storage:link'); 
});
