<?php

namespace App\Providers;

use App\Http\Controllers\CookieController;
use Http;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\Services\ApiService;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Foundation\Application;
use App\Models\User;
class ApiserviceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    protected $baseUrl='https://stagingott.etvwin.com/';
    public function register(): void
    {
        $this->app->bind(ApiService::class, function ($app){
             return new ApiService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
      view::composer(
        '*', function($view){
            $endpoint ='catalog/top';
            $data = app(ApiService::class)->fetchData($endpoint);
            $displayTitles = app(ApiService::class)->apitesting($data);
           
             $view->with(['displayTitles'=>$displayTitles,]);
          }); 
      
      // view::composer(['Header.header','Home.home'],function($view){
      //   $data=app(ApiService::class)->fetchData();
      //   $displayTitle = app(ApiService::class)->apitesting($data);
      //   $web_banner = app(ApiService::class)->apitesting();
      //   $view->with([
      //     // 'displayTitles'=>$displayTitle,
      //     'web_banner_url'=>$web_banner
      //   ]);
      // });
     
        //   View::composer('*', function ($view) {
        //     $apiService = new ApiService(); // Create an instance of your ApiService
        //     $web_banner_url = $apiService->webbanner();
        //     $view->with(['web_banner_url' => $web_banner_url]);
        // });
    }

 
    
}




