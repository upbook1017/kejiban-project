<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*Route::get('home', function () {
    return view('home.index');
});*/

Route::get('home', 'App\Http\Controllers\HomeController@index');
