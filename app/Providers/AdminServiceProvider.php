<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $halaman = '';
        if (Request::segment(1) == 'item'){
            $halaman = 'item';
        }
        view()->share('halaman', $halaman);
    }

    public function register()
    {
        //
    }
}
