<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Storage::disk( 'portfolio' )->json( 'projects.json' );

        return view( "projects.index", [
            'projects' => $projects,
        ] );
    }

    public function show( string $id )
    {
        $projects = Storage::disk( 'portfolio' )->json( 'projects.json' );

        $projectArr = array_filter( $projects, fn( $project ) => $project['id'] === $id );
        $project    = current( $projectArr );

        dd( $project );
        return view( "projects.show", ['project' => $project] );
    }

}
