<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function($data) {
            return Response::json($data, 200);
        });

        Response::macro('error', function($message) {
            return Response::json(
                [
                    'message'=> $message
                ], 400
            );
        });
    }
}
