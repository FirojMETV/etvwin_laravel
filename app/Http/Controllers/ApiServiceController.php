<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\ApiService;
use App\Http\Controllers\CookieController;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
class ApiServiceController extends Controller
{
 public function show(ApiService $apiService  )
 {
  $endpoint ='catalog/top';
  
  $data = $apiService->fetchData($endpoint);

  $displayTitles= $apiService->apitesting($data);
  //  $str = implode(',',$displayTitles);
  // var_dump($str);
 
  return view('Header/header',['displayTitles'=>$displayTitles]);

  // dd($displayTitles);
}

}