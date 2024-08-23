<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        return view( "projects.index" );
    }

    public function show( string $id )
    {
        return view( "projects.show", ['id' => $id] );
    }

}
