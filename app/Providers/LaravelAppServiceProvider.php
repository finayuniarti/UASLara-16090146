<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Request;

class LaravelAppServiceProvider extends ServiceProvider
{

    public function boot()
    {
      $halaman = "";
      if(Request::segment(1) == 'home'){
          $halaman = 'home';
      }
      if(Request::segment(1) == 'order'){
          $halaman = 'order';
      }
      view()->share('halaman', $halaman);
    }

    public function register()
    {
        //
    }
}
