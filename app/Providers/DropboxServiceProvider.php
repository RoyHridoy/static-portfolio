<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Storage::extend( 'dropbox', function ( Application $app, array $config ) {

            $adapter = new DropboxAdapter( new Client(
                $config['authorization_token']
            ) );

            $fileSystem = new Filesystem( $adapter, ['case_sensitive' => false] );
            return new FilesystemAdapter( $fileSystem, $adapter, $config );
        } );
    }
}
