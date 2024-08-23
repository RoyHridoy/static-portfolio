<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get( '/', HomeController::class );
Route::get( 'experience', ExperienceController::class );
Route::resource( '/projects', ProjectController::class )->only( ['index', 'show'] );
