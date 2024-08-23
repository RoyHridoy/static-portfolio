<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke( Request $request )
    {
        return view( "home", [
            'homeContent' => Storage::disk( 'portfolio' )->json( 'home.json' ),
        ] );
    }
}
