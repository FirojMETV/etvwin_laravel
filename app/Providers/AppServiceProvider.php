<?php

namespace App\Providers;

use App\Services\ApiService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind('path.resources',function(){
            return base_path().'Header.header';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer("*", function($view){
            $endpoint ='catalog/top';
            $data= app(ApiService::class)->fetchData($endpoint);
            $displayTitles = app(ApiService::class)->apitesting($data);
            $view->with('displayTitles',$displayTitles);
        });
    }
}
