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
   public $platform_note="";
   public $platform_code="";
   public $content_id="";
   public $text_message="";
   public $app_code="";
   public $params_hash='';
   public $params_hash2='';
   public $params_hash2_config_params='';
   public $config_params_feedback="";

   public $feedback_email="";
   public $feedback_catalog_id="";
   public $feedback_friendly_id='';
   public $config_params_qa ="";
   public $qa_catalog_id ="";
   public $qa_friendly_id ="";

   public $config_params_recipe ="";
   public $recipe_catalog_id ="";
   public $recipe_friendly_id ="";

   public $config_params_show ="";
   public $show_catalog_id ="";
   public $show_friendly_id ="";
   
   public $android_version="";
   public $android_version_current_version ="";
   public $android_version_min_version ="";
   public $android_version_force_upgrade ="";
   public $android_version_message ="";

   public $ios_version ="";
   public $ios_version_current_version ="";
   public $ios_version_min_version ="";
   public $ios_version_force_upgrade ="";
   public $ios_version_message ="";
   
   public $firestick_version ="";
   public $firestick_version_current_version ="";
   public $firestick_version_min_version ="";
   public $firestick_version_force_upgrade ="";

   public $firestick_version_message ="";
 

   public function getCookie(Request $request){
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


   


// public function setCookie()
//    {

//       $authToken = 'q5u8JMWTd2698ncg7q4Q'; //auth_token
//       $accessToken = 'Ay6KCkajdBzztJ4bptpW'; //acces token 
//       $userIP = $request->ip('');
//       $country_code2 = 'IN';
//       $country_code3 = "";
//       $country_name = 'India';
//       $continent_code = "AS";
//       $region_name = "";
//       $city_name = '';
//       $postal_code = ',';
//       $latitude = 27.9974;
//       $longitude = 79.0011;
//       $dma_code = '';
//       $area_code = "";
//       $timezone = "Asia Kolkata";
//       $real_region_name = '';
//       $state = '';
//       $state_code = '';
//       $calling_code = '0091';
//       $min_digits = 10;
//       $max_digits = 10;
//       $expirationTime = time() + 30;
//       $authTokenCookie = session()->put('auth_token', $authToken, $expirationTime);
//       $accessTokenCookie = session()->put('access_token', $accessToken, $expirationTime);
//       $userIPCookie = session()->put('user_ip', $userIP, $expirationTime);
//       $country_code3_Cookie = session()->put('country_code3', $country_code3, $expirationTime);
//       $country_nameCookie = session()->put('Country_Name', $country_name, $expirationTime);
//       $continent_codeCookie = session()->put('Continent_code', $continent_code, $expirationTime);
//       $region_nameCookie = session()->put('Region_name', $region_name, $expirationTime);
//       $city_nameCookie = session()->put('City_name', $city_name, $expirationTime);
//       $dma_codeCookie = session()->put('Dma_Code', $dma_code, $expirationTime);
//       $area_codeCookie = session()->put('Area_code', $area_code, $expirationTime);
//       $timezoneCookie = session()->put('TimeZone', $timezone, $expirationTime);
//       $real_region_nameCookie = session()->put('real_region_name', $real_region_name, $expirationTime);
//       $state_Cookie = session()->put('State_cookies', $state, $expirationTime);
//       $state_codeCookies = session()->put('State_code_cookies', $state_code, $expirationTime);
//       $calling_code_Cookie = session()->put('calling_code', $calling_code, $expirationTime);
//       $min_digitsCookie = session()->put('min_digits', $min_digits, $expirationTime);
//       $max_digitsCookie = session()->put('max_digits', $max_digits, $expirationTime);
//       $countryCode2Cookie = session()->put('country_code2', $country_code2, $expirationTime);
//       $postalCodeCookie = session()->put('postal_code', $postal_code, $expirationTime);
//       $latitudeCookie = session()->put('latitude', $latitude, $expirationTime);

//       // echo $request->session()->put('name','EtvWin');
//       return new Response('Session data has been set');

//    }
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
      // print_r($this->UserIP);


      // config params of api
       $config_data = $this->BASE_URL . $this->config . "?region=" . $this->country_code2 . "&auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN ;

      $config_data_types=$this->usermodel->GETAPIMODEL($config_data);
      // config api last api for website;

      $data_config=json_decode($config_data_types);
      //  print_r($data_config);
      $this->title= $data_config->data->title;
       $this->platform_note=$data_config->data->platform_note;
      $this->platform_code=$data_config->data->platform_code;
      $this->content_id= $data_config->data->content_id; 
      $this->text_message=$data_config->data->text_message;
      $this->app_code=$data_config->data->app_code;
      $this->params_hash=$data_config->data->params_hash;
      $this->params_hash2=$data_config->data->params_hash2;
      $this->params_hash2_config_params=$data_config->data->params_hash2->config_params;
      // feedback api
      $this->config_params_feedback=$data_config->data->params_hash2->config_params->feedback;
      $this->feedback_email=$data_config->data->params_hash2->config_params->feedback->email;
      $this->feedback_catalog_id= $data_config->data->params_hash2->config_params->feedback->catalog_id;
      $this->feedback_friendly_id= $data_config->data->params_hash2->config_params->feedback->friendly_id;
      //  qa api
      $this->config_params_qa= $data_config->data->params_hash2->config_params->qa;
      $this->qa_catalog_id=$data_config->data->params_hash2->config_params->qa->catalog_id;
      $this-> qa_friendly_id=$data_config->data->params_hash2->config_params->qa->friendly_id;
      // recipe api 
      $this->config_params_recipe = $data_config->data->params_hash2->config_params->recipe;
      $this->recipe_catalog_id= $data_config->data->params_hash2->config_params->recipe->catalog_id;
      $this->recipe_friendly_id= $data_config->data->params_hash2->config_params->recipe->friendly_id;
      // show api 
      $this->config_params_show= $data_config->data->params_hash2->config_params->show;
      $this->show_catalog_id=$data_config->data->params_hash2->config_params->show->catalog_id;
      $this->show_friendly_id=$data_config->data->params_hash2->config_params->show->friendly_id;
      
      // android api
      $this->android_version=$data_config->data->params_hash2->config_params->android_version;
      $this->android_version_current_version=$data_config->data->params_hash2->config_params->android_version->current_version;
      $this->android_version_min_version=$data_config->data->params_hash2->config_params->android_version->min_version;
      $this->android_version_force_upgrade=$data_config->data->params_hash2->config_params->android_version->force_upgrade;
      $this->android_version_message=$data_config->data->params_hash2->config_params->android_version->message;

      // ios api
      $this->ios_version=$data_config->data->params_hash2->config_params->ios_version;
      $this->ios_version_current_version=$data_config->data->params_hash2->config_params->ios_version->current_version;
      $this->ios_version_min_version=$data_config->data->params_hash2->config_params->ios_version->min_version;
      $this->ios_version_force_upgrade=$data_config->data->params_hash2->config_params->ios_version->force_upgrade;     $this->ios_version_message=$data_config->data->params_hash2->config_params->ios_version->message;
     
      // firestick
      $this->firestick_version=$data_config->data->params_hash2->config_params->firestick_version;
      $this->firestick_version_current_version=$data_config->data->params_hash2->config_params->firestick_version->current_version;
      $this->firestick_version_min_version=$data_config->data->params_hash2->config_params->firestick_version->min_version;
      $this->firestick_version_force_upgrade=$data_config->data->params_hash2->config_params->firestick_version->force_upgrade;
      $this->firestick_version_message=$data_config->data->params_hash2->config_params->firestick_version->message;
      

      print_r($this->firestick_version_message);
      

   }
}