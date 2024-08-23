<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke( Request $request )
    {
        return view( "experience", [
            'experiences' => Storage::disk( 'portfolio' )->json( 'experience.json' ),
        ] );
    }
}
