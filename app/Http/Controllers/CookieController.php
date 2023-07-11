<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\User;
use App\Services\ApiService;

class CookieController extends Controller
{
   public $BASE_URL = "https://stagingott.etvwin.com/";
   public $AUTHTOKEN = "q5u8JMWTd2698ncg7q4Q ";

   public $UserIP = "https://stagingott.etvwin.com/regions/autodetect/ip.gzip?";

   public $UserIP_AUTHTOKEN = 'q5u8JMWTd2698ncg7q4Q&access_token=Ay6KCkajdBzztJ4bptpW';

   public $config = 'https://stagingott.etvwin.com/catalogs/message/items/app-config-params.gzip?';

   public $Region = 'IN&auth_token=q5u8JMWTd2698ncg7q4Q&access_token=Ay6KCkajdBzztJ4bptpW&current_version=1.1';
   public $data = "";

   public function setCookie(Request $request)
   {

      $authToken = 'q5u8JMWTd2698ncg7q4Q'; //auth_token
      $accessToken = 'Ay6KCkajdBzztJ4bptpW'; //acces token 
      $userIP = $request->ip('');
      $country_code2 = 'IN';
      $country_code3 = "";
      $country_name = 'India';
      $continent_code = "AS";
      $region_name = "";
      $city_name = '';
      $postal_code = ',';
      $latitude = 27.9974;
      $longitude = 79.0011;
      $dma_code = '';
      $area_code = "";
      $timezone = "Asia Kolkata";
      $real_region_name = '';
      $state = '';
      $state_code = '';
      $calling_code = '0091';
      $min_digits = 10;
      $max_digits = 10;


      $expirationTime = time() + 30;
      $authTokenCookie = cookie('auth_token', $authToken, $expirationTime);
      $accessTokenCookie = cookie('access_token', $accessToken, $expirationTime);
      $userIPCookie = cookie('user_ip', $userIP, $expirationTime);
      $country_code3_Cookie = cookie('country_code3', $country_code3, $expirationTime);
      $country_nameCookie = cookie('Country_Name', $country_name, $expirationTime);
      $continent_codeCookie = cookie('Continent_code', $continent_code, $expirationTime);
      $region_nameCookie = cookie('Region_name', $region_name, $expirationTime);
      $city_nameCookie = cookie('City_name', $city_name, $expirationTime);
      $dma_codeCookie = cookie('Dma_Code', $dma_code, $expirationTime);
      $area_codeCookie = cookie('Area_code', $area_code, $expirationTime);
      $timezoneCookie = cookie('TimeZone', $timezone, $expirationTime);
      $real_region_nameCookie = cookie('real_region_name', $real_region_name, $expirationTime);
      $state_Cookie = cookie('State_cookies', $state, $expirationTime);
      $state_codeCookies = cookie('State_code_cookies', $state_code, $expirationTime);
      $calling_code_Cookie = cookie('calling_code', $calling_code, $expirationTime);
      $min_digitsCookie = cookie('min_digits', $min_digits, $expirationTime);
      $max_digitsCookie = cookie('max_digits', $max_digits, $expirationTime);
      $countryCode2Cookie = cookie('country_code2', $country_code2, $expirationTime);
      $postalCodeCookie = cookie('postal_code', $postal_code, $expirationTime);
      $latitudeCookie = cookie('latitude', $latitude, $expirationTime);

      $longitudeCookie = cookie('longitude', $longitude, $expirationTime);

      // return new Response(' token access')
      $response = new Response(' token access');
      $response->withCookie($authTokenCookie);
      $response->withCookie($accessTokenCookie);
      $response->withCookie($userIPCookie);
      $response->withCookie($countryCode2Cookie);
      $response->withCookie($postalCodeCookie);
      $response->withCookie($latitudeCookie);
      $response->withCookie($longitudeCookie);
      $response->withCookie($country_code3_Cookie);
      $response->withCookie($country_nameCookie);
      $response->withCookie($continent_codeCookie);
      $response->withCookie($region_nameCookie);
      $response->withCookie($city_nameCookie);
      $response->withCookie($dma_codeCookie);
      $response->withCookie($area_codeCookie);
      $response->withCookie($timezoneCookie);
      $response->withCookie($real_region_nameCookie);
      $response->withCookie($state_Cookie);
      $response->withCookie($state_codeCookies);
      $response->withCookie($calling_code_Cookie);
      $response->withCookie($min_digitsCookie);
      $response->withCookie($max_digitsCookie);
      return $response;
   }
   public function getCookie(Request $request)
   {

      // Retrieve the cookies
      $authToken = $request->cookie('auth_token');
      $accessToken = $request->cookie('access_token');
      $userIP = $request->cookie('user_ip');
      $countryCode = $request->cookie('country_code2');
      $postalCode = $request->cookie('postal_code');
      $latitude = $request->cookie('latitude');
      $longitude = $request->cookie('longitude');
      $country_code3 = $request->cookie('country_code3');
      $country_name = $request->cookie('Country_Name');
      $continent_code = $request->cookie('Continent_code');
      $region_name = $request->cookie('Region_name');
      $city_name = $request->cookie('City_name');
      $dma_code = $request->cookie('Dma_Code');
      $area_code = $request->cookie('Area_code');
      $timezone = $request->cookie('TimeZone');
      $real_region_name = $request->cookie('real_region_name');
      $state = $request->cookie('State_cookies');
      $state_code = $request->cookie('State_code_cookies');
      $calling_code = $request->cookie('calling_code');
      $min_digits = $request->cookie('min_digits');
      $max_digits = $request->cookie('max_digits');

      // Display the user data
      return response()->json([
         'auth_token' => $authToken,
         'access_token' => $accessToken,
         'user_ip' => $userIP,
         'country_code2' => $countryCode,
         'country_code3' => $country_code3,
         'Country_Name' => $country_name,
         'Continent_code' => $continent_code,
         "Region_name" => $region_name,
         'City_name' => $city_name,
         'postal_code' => $postalCode,
         'latitude' => $latitude,
         'longitude' => $longitude,
         'Dma_code' => $dma_code,
         'Area_code' => $area_code,
         'TimeZone' => $timezone,
         'real_region_name' => $real_region_name,
         'State_cookies' => $state,
         'State_code_cookies' => $state_code,
         'calling_code' => $calling_code,
         'min-digits' => $min_digits,
         "max_digits" => $max_digits,





      ]);
   }

   public function Session_set(Request $request)
   {

      $authToken = 'q5u8JMWTd2698ncg7q4Q'; //auth_token
      $accessToken = 'Ay6KCkajdBzztJ4bptpW'; //acces token 
      $userIP = $request->ip('');
      $country_code2 = 'IN';
      $country_code3 = "";
      $country_name = 'India';
      $continent_code = "AS";
      $region_name = "";
      $city_name = '';
      $postal_code = ',';
      $latitude = 27.9974;
      $longitude = 79.0011;
      $dma_code = '';
      $area_code = "";
      $timezone = "Asia Kolkata";
      $real_region_name = '';
      $state = '';
      $state_code = '';
      $calling_code = '0091';
      $min_digits = 10;
      $max_digits = 10;
      $expirationTime = time() + 30;
      $authTokenCookie = session()->put('auth_token', $authToken, $expirationTime);
      $accessTokenCookie = session()->put('access_token', $accessToken, $expirationTime);
      $userIPCookie = session()->put('user_ip', $userIP, $expirationTime);
      $country_code3_Cookie = session()->put('country_code3', $country_code3, $expirationTime);
      $country_nameCookie = session()->put('Country_Name', $country_name, $expirationTime);
      $continent_codeCookie = session()->put('Continent_code', $continent_code, $expirationTime);
      $region_nameCookie = session()->put('Region_name', $region_name, $expirationTime);
      $city_nameCookie = session()->put('City_name', $city_name, $expirationTime);
      $dma_codeCookie = session()->put('Dma_Code', $dma_code, $expirationTime);
      $area_codeCookie = session()->put('Area_code', $area_code, $expirationTime);
      $timezoneCookie = session()->put('TimeZone', $timezone, $expirationTime);
      $real_region_nameCookie = session()->put('real_region_name', $real_region_name, $expirationTime);
      $state_Cookie = session()->put('State_cookies', $state, $expirationTime);
      $state_codeCookies = session()->put('State_code_cookies', $state_code, $expirationTime);
      $calling_code_Cookie = session()->put('calling_code', $calling_code, $expirationTime);
      $min_digitsCookie = session()->put('min_digits', $min_digits, $expirationTime);
      $max_digitsCookie = session()->put('max_digits', $max_digits, $expirationTime);
      $countryCode2Cookie = session()->put('country_code2', $country_code2, $expirationTime);
      $postalCodeCookie = session()->put('postal_code', $postal_code, $expirationTime);
      $latitudeCookie = session()->put('latitude', $latitude, $expirationTime);

      // echo $request->session()->put('name','EtvWin');
      return new Response('Session data has been set');

   }
   public function Session_get(Request $request)
   {

      $authToken = $request->cookie('auth_token');
      $accessToken = $request->cookie('access_token');
      $userIP = $request->cookie('user_ip');
      $countryCode = $request->cookie('country_code2');
      $postalCode = $request->cookie('postal_code');
      $latitude = $request->cookie('latitude');
      $longitude = $request->cookie('longitude');
      $country_code3 = $request->cookie('country_code3');
      $country_name = $request->cookie('Country_Name');
      $continent_code = $request->cookie('Continent_code');
      $region_name = $request->cookie('Region_name');
      $city_name = $request->cookie('City_name');
      $dma_code = $request->cookie('Dma_Code');
      $area_code = $request->cookie('Area_code');
      $timezone = $request->cookie('TimeZone');
      $real_region_name = $request->cookie('real_region_name');
      $state = $request->cookie('State_cookies');
      $state_code = $request->cookie('State_code_cookies');
      $calling_code = $request->cookie('calling_code');
      $min_digits = $request->cookie('min_digits');
      $max_digits = $request->cookie('max_digits');

      // Display the user data
      return response()->json([
         'auth_token' => $authToken,
         'access_token' => $accessToken,
         'user_ip' => $userIP,
         'country_code2' => $countryCode,
         'country_code3' => $country_code3,
         'Country_Name' => $country_name,
         'Continent_code' => $continent_code,
         "Region_name" => $region_name,
         'City_name' => $city_name,
         'postal_code' => $postalCode,
         'latitude' => $latitude,
         'longitude' => $longitude,
         'Dma_code' => $dma_code,
         'Area_code' => $area_code,
         'TimeZone' => $timezone,
         'real_region_name' => $real_region_name,
         'State_cookies' => $state,
         'State_code_cookies' => $state_code,
         'calling_code' => $calling_code,
         'min-digits' => $min_digits,
         "max_digits" => $max_digits,
      ]);

   }

   public function apitesting()
   {

      //   $url = $this->BASE_URL."access_token.gzip?auth_token=".$this->AUTHTOKEN;
      $ip = $this->BASE_URL.$this->UserIP.$this->UserIP_AUTHTOKEN;
      
      $user_model = new User;
      $this->data = $user_model->GETAPIMODEL($ip);
    
      // $array = array("name"=>"test","job"=>"testing");
      // $url="https://reqres.in/api/users";
      // $this->data = $user_model->POSTAPIMODEL($url,$array);
      $val = json_decode($this->data);
      // print_r($val->data->UserIP);

         return $val;

      //return APIMODEL($url);
   }
}


// public function __construct(ApiService $apiService)
// {
//     $this->apiService = $apiService;
// }

// public function index()
// {
//     $url = 'https://api.example.com';
//     $response = $this->apiService->makeApiRequest($url);

//     // Process the response
//     // ...

//     return view('users.index', ['response' => $response]);
// }
