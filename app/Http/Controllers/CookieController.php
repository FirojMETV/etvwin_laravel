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
   public $AUTHTOKEN = "q5u8JMWTd2698ncg7q4Q";

   public $UserIP = "regions/autodetect/ip.gzip";

   public $ACCESSTOKEN = '';

   public $config = 'catalogs/message/items/app-config-params.gzip';

   public $Version = '1.1';
   public $data = "";
   public $usermodel = "";

   public $request = "";
   public $userIP = "";
   public $country_code2 = '';
   public $country_code3 = "";
   public $country_name = '';
   public $continent_code = "";
   public $region_name = "";
   public $city_name = '';
   public $postal_code = '';
   public $latitude = "";
   public $longitude = "";
   public $dma_code = '';
   public $area_code = "";
   public $timezone = "";
   public $real_region_name = '';
   public $state = '';
   public $state_code = '';
   public $calling_code = '';
   public $min_digits = "";
   public $max_digits = "";


   // config data for api

   public $title="";
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

   public function __construct()
   {
      $url = $this->BASE_URL . "access_token.gzip?auth_token=" . $this->AUTHTOKEN;
      $this->usermodel = new User;
      $data = $this->usermodel->GETAPIMODEL($url);
      $data = json_decode($data);
      $this->ACCESSTOKEN = $data->data->access_token;
   }
   public function SecondAPI()
   {

      $ip = $this->BASE_URL . $this->UserIP . "?auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN;
      $data = $this->usermodel->GETAPIMODEL($ip);
      $Datas = json_decode($data);
      print_r($Datas);
      //  $this->UserIP=$Datas->region->ip;
      // $this->country_code2 = $Datas->region->country_code2;
      // $this->country_code3 = $Datas->region->country_code3;
      // $this->country_name = $Datas->region->country_name;
      // $this->continent_code = $Datas->region->continent_code;
      // $this->region_name = $Datas->region->region_name;
      // $this->postal_code = $Datas->region->postal_code;
      // $this->latitude = $Datas->region->latitude;
      // $this->longitude = $Datas->region->longitude;
      // $this->dma_code = $Datas->region->dma_code;
      // $this->area_code = $Datas->region->area_code;
      // $this->timezone = $Datas->region->timezone;
      // $this->real_region_name = $Datas->region->real_region_name;
      // $this->state = $Datas->region->state;
      // $this->state_code = $Datas->region->state_code;
      // $this->calling_code = $Datas->region->calling_code;
      // $this->min_digits = $Datas->region->min_digits;
      // $this->max_digits = $Datas->region->max_digits;

      print_r($this->UserIP);

   }
   public function apitesting()
   {
      $ip = $this->BASE_URL . $this->UserIP . "?auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN;
      $data = $this->usermodel->GETAPIMODEL($ip);
      $Datas = json_decode($data);
      // print_r($Datas);
       $this->UserIP=$Datas->region->ip;
      $this->country_code2 = $Datas->region->country_code2;
      $this->country_code3 = $Datas->region->country_code3;
      $this->country_name = $Datas->region->country_name;
      $this->continent_code = $Datas->region->continent_code;
      $this->region_name = $Datas->region->region_name;
      $this->postal_code = $Datas->region->postal_code;
      $this->latitude = $Datas->region->latitude;
      $this->longitude = $Datas->region->longitude;
      $this->dma_code = $Datas->region->dma_code;
      $this->area_code = $Datas->region->area_code;
      $this->timezone = $Datas->region->timezone;
      $this->real_region_name = $Datas->region->real_region_name;
      $this->state = $Datas->region->state;
      $this->state_code = $Datas->region->state_code;
      $this->calling_code = $Datas->region->calling_code;
      $this->min_digits = $Datas->region->min_digits;
      $this->max_digits = $Datas->region->max_digits;

       $config_data = $this->BASE_URL . $this->config . "?region=" 
      . $this->country_code2 . "&auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN ;

      $config_data_types=$this->usermodel->GETAPIMODEL($config_data);
      $data_config=json_decode($config_data_types);
      $this->title= $data_config->data->title;
      
      print_r($this->title);
      

   }
}