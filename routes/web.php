<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get( '/', function () {

    $img = Storage::disk( 'dropbox' )->url( '1.jpg' );

    return view( 'home', [
        'img' => $img,
    ] );
} );
