<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
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

   public $nested_list_items = 'catalog_lists/top-menu-web.gzip?nested_list_items=';
   public $List_false = "false";
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

   public $title = "";
   public $platform_note = "";
   public $platform_code = "";
   public $content_id = "";
   public $text_message = "";
   public $app_code = "";
   public $params_hash = '';
   public $params_hash2 = '';
   public $params_hash2_config_params = '';
   public $config_params_feedback = "";

   public $feedback_email = "";
   public $feedback_catalog_id = "";
   public $feedback_friendly_id = '';
   public $config_params_qa = "";
   public $qa_catalog_id = "";
   public $qa_friendly_id = "";

   public $config_params_recipe = "";
   public $recipe_catalog_id = "";
   public $recipe_friendly_id = "";

   public $config_params_show = "";
   public $show_catalog_id = "";
   public $show_friendly_id = "";

   public $android_version = "";
   public $android_version_current_version = "";
   public $android_version_min_version = "";
   public $android_version_force_upgrade = "";
   public $android_version_message = "";

   public $ios_version = "";
   public $ios_version_current_version = "";
   public $ios_version_min_version = "";
   public $ios_version_force_upgrade = "";
   public $ios_version_message = "";

   public $firestick_version = "";
   public $firestick_version_current_version = "";
   public $firestick_version_min_version = "";
   public $firestick_version_force_upgrade = "";

   public $firestick_version_message = "";

   public $androidtv_version = "";
   public $androidtv_version_current_version = "";
   public $androidtv_version_min_version = "";
   public $androidtv_version_force_upgrade = "";
   public $androidtv_version_message = "";

   // dnd
   public $dnd = "";
   public $dnd_start_time = "";
   public $dnd_end_time = "";

   // offline_preferences
   public $offline_preferences = "";
   // "win_1920x1080"
   public $profile1920 = "";
   public $display_name1920 = "";
   //  "win_1280x720"
   public $profile1280 = "";
   public $display_name1280 = "";
   //  "win_426x240"
   public $profile426 = "";
   public $display_name426 = "";

   //  "High-720p"
   public $profile720p = "";
   public $display_name720p = "";
   // "Medium-480p"
   public $profile480p = "";
   public $display_name480p = "";

   // "Low-240p"
   public $profile240p = "";
   public $display_name240p = "";


   public $reminder_interval = '';

   public $faq = "";
   public $contact_us = "";
   public $t_c = "";
   public $privacy_policy = "";
   public $about_us = "";
   public $web_portal_url = "";
   public $offline_deletion_days = "";
   public $global_view_count = "";


   public $commentable = "";
   public $ad_type = "";

   public $constant_quality = "";
   public $subscription_url = "";
   public $tv_login_url = "";
   public $qr_login_url = "";
   public $watchhistory_interval_sec = "";
   public $watchhistory_api = "";
   public $popup_details = '';

   public $show_popup = "";
   public $images = "";
   public $images_high_9_16 = "";
   public $images_high_3_4 = "";
   public $other_region_images = "";
   public $other_region_images_high_9_16 = "";
   public $other_region_images_high_3_4 = "";
   public $redirect_type = "";
   public $redirect_url = "";
   public $access_control = "";
   public $access_control_title = "";
   public $access_control_content_id = "";
   public $issue_list = "";
   public $Payment_issue_title = "";
   public $Payment_issue_key = "";

   public $Subscription_issue_title = "";
   public $Subscription_issue_key = "";

   public $Content_issue_title = "";
   public $Content_issue_key = "";
   public $Other_issue_title = "";
   public $Other_issue_key = "";


   public $payment_gateway = "";

   public $Billdesk_gateway = "";
   public $Billdesk_default = "";

   public $ccavenue_gateway = "";
   public $ccavenue_default = "";

   public $app_version = "";
   public $app_version_upgrade_type = "";
   public $app_version_message = "";

   public $regions = "";

   public $order = "";
   public $type = "";
   public $friendly_id = "";
   public $catalog_id = "";
   public $service = "";
   public $service_min_android_app_version = "";
   public $service_min_ios_app_version = "";
   public $services = "";
   public $catalog_name = "";
   public $catalog_dns = "";
   public $catalog_available = "";
   public $name = "";
   public $dns = "";
   public $available = "";
   public $users_name = "";
   public $users_dns = "";
   public $users_available = "";
   public $subscriptions_name = "";
   public $subscriptions_dns = "";
   public $subscriptions_available = "";
   public $search_name = "";
   public $search_dns = "";
   public $search_available = "";
   public $recommendations_name = "";
   public $recommendations_dns = "";
   public $recommendations_available = "";
   public $analytics_name = "";
   public $analytics_dns = "";
   public $analytics_available = "";
   public $webservice = "";

   public $access_tag = "";

   public $ad_banner_ids = "";
   public $additional_keys = "";
   public $available_filters = "";

   public $catalog_list_items = "";


   public $displayTitle = "";
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
      $this->UserIP = $Datas->region->ip;
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
      $this->UserIP = $Datas->region->ip;
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
      $config_data = $this->BASE_URL . $this->config . "?region=" . $this->country_code2 . "&auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN;

      $config_data_types = $this->usermodel->GETAPIMODEL($config_data);

      // config api last api for website;
      $config_data_types = explode("t&c", $config_data_types);
      $config_data_types = implode("t_c", $config_data_types);
      $data_config = json_decode($config_data_types);

      //  print_r($data_config);
      $this->title = $data_config->data->title;
      $this->platform_note = $data_config->data->platform_note;
      $this->platform_code = $data_config->data->platform_code;
      $this->content_id = $data_config->data->content_id;
      $this->text_message = $data_config->data->text_message;
      $this->app_code = $data_config->data->app_code;
      $this->params_hash = $data_config->data->params_hash;
      $this->params_hash2 = $data_config->data->params_hash2;
      $this->params_hash2_config_params = $data_config->data->params_hash2->config_params;

      // feedback api
      $this->config_params_feedback = $data_config->data->params_hash2->config_params->feedback;
      $this->feedback_email = $data_config->data->params_hash2->config_params->feedback->email;
      $this->feedback_catalog_id = $data_config->data->params_hash2->config_params->feedback->catalog_id;
      $this->feedback_friendly_id = $data_config->data->params_hash2->config_params->feedback->friendly_id;
      //  qa api
      $this->config_params_qa = $data_config->data->params_hash2->config_params->qa;
      $this->qa_catalog_id = $data_config->data->params_hash2->config_params->qa->catalog_id;
      $this->qa_friendly_id = $data_config->data->params_hash2->config_params->qa->friendly_id;
      // recipe api 
      $this->config_params_recipe = $data_config->data->params_hash2->config_params->recipe;
      $this->recipe_catalog_id = $data_config->data->params_hash2->config_params->recipe->catalog_id;
      $this->recipe_friendly_id = $data_config->data->params_hash2->config_params->recipe->friendly_id;
      // show api 
      $this->config_params_show = $data_config->data->params_hash2->config_params->show;
      $this->show_catalog_id = $data_config->data->params_hash2->config_params->show->catalog_id;
      $this->show_friendly_id = $data_config->data->params_hash2->config_params->show->friendly_id;

      // android api
      $this->android_version = $data_config->data->params_hash2->config_params->android_version;
      $this->android_version_current_version = $data_config->data->params_hash2->config_params->android_version->current_version;
      $this->android_version_min_version = $data_config->data->params_hash2->config_params->android_version->min_version;
      $this->android_version_force_upgrade = $data_config->data->params_hash2->config_params->android_version->force_upgrade;
      $this->android_version_message = $data_config->data->params_hash2->config_params->android_version->message;

      // ios api
      $this->ios_version = $data_config->data->params_hash2->config_params->ios_version;
      $this->ios_version_current_version = $data_config->data->params_hash2->config_params->ios_version->current_version;
      $this->ios_version_min_version = $data_config->data->params_hash2->config_params->ios_version->min_version;
      $this->ios_version_force_upgrade = $data_config->data->params_hash2->config_params->ios_version->force_upgrade;
      $this->ios_version_message = $data_config->data->params_hash2->config_params->ios_version->message;

      // firestick
      $this->firestick_version = $data_config->data->params_hash2->config_params->firestick_version;
      $this->firestick_version_current_version = $data_config->data->params_hash2->config_params->firestick_version->current_version;
      $this->firestick_version_min_version = $data_config->data->params_hash2->config_params->firestick_version->min_version;
      $this->firestick_version_force_upgrade = $data_config->data->params_hash2->config_params->firestick_version->force_upgrade;
      $this->firestick_version_message = $data_config->data->params_hash2->config_params->firestick_version->message;

      // androidTv api
      $this->androidtv_version = $data_config->data->params_hash2->config_params->androidtv_version;
      $this->androidtv_version_current_version = $data_config->data->params_hash2->config_params->androidtv_version->current_version;
      $this->androidtv_version_min_version = $data_config->data->params_hash2->config_params->androidtv_version->min_version;
      $this->androidtv_version_force_upgrade = $data_config->data->params_hash2->config_params->androidtv_version->force_upgrade;
      $this->androidtv_version_message = $data_config->data->params_hash2->config_params->androidtv_version->message;

      // dnd api
      $this->dnd = $data_config->data->params_hash2->config_params->dnd;
      $this->dnd_start_time = $data_config->data->params_hash2->config_params->dnd[0]->start_time;
      $this->dnd_end_time = $data_config->data->params_hash2->config_params->dnd[0]->end_time;

      //offline_preferences 
      $this->offline_preferences = $data_config->data->params_hash2->config_params->offline_preferences;
      //size- 1920
      $this->profile1920 = $data_config->data->params_hash2->config_params->offline_preferences[0]->profile;
      $this->display_name1920 = $data_config->data->params_hash2->config_params->offline_preferences[0]->display_name;
      // size-1280
      $this->profile1280 = $data_config->data->params_hash2->config_params->offline_preferences[1]->profile;
      $this->display_name1280 = $data_config->data->params_hash2->config_params->offline_preferences[1]->display_name;
      // size-426
      $this->profile426 = $data_config->data->params_hash2->config_params->offline_preferences[2]->profile;
      $this->display_name426 = $data_config->data->params_hash2->config_params->offline_preferences[2]->display_name;
      // size-high-720p
      $this->profile720p = $data_config->data->params_hash2->config_params->offline_preferences[3]->profile;
      $this->display_name720p = $data_config->data->params_hash2->config_params->offline_preferences[3]->display_name;

      //size medium-480p
      $this->profile480p = $data_config->data->params_hash2->config_params->offline_preferences[4]->profile;
      $this->display_name480p = $data_config->data->params_hash2->config_params->offline_preferences[4]->display_name;

      //size low-240p
      $this->profile240p = $data_config->data->params_hash2->config_params->offline_preferences[5]->profile;
      $this->display_name240p = $data_config->data->params_hash2->config_params->offline_preferences[5]->display_name;

      $this->reminder_interval = $data_config->data->params_hash2->config_params->reminder_interval;
      $this->faq = $data_config->data->params_hash2->config_params->faq;
      $this->contact_us = $data_config->data->params_hash2->config_params->contact_us;

      //  error in terms and conditions
      $this->t_c = $data_config->data->params_hash2->config_params->t_c;

      $this->privacy_policy = $data_config->data->params_hash2->config_params->privacy_policy;
      $this->about_us = $data_config->data->params_hash2->config_params->about_us;
      $this->web_portal_url = $data_config->data->params_hash2->config_params->web_portal_url;
      $this->offline_deletion_days = $data_config->data->params_hash2->config_params->offline_deletion_days;

      // data can't shown in this line
      $this->global_view_count = $data_config->data->params_hash2->config_params->global_view_count;
      //  print_r(json_encode($data_config));
      $this->commentable = $data_config->data->params_hash2->config_params->commentable;

      $this->ad_type = $data_config->data->params_hash2->config_params->ad_type;
      $this->tv_login_url = $data_config->data->params_hash2->config_params->tv_login_url;
      $this->qr_login_url = $data_config->data->params_hash2->config_params->qr_login_url;
      $this->watchhistory_interval_sec = $data_config->data->params_hash2->config_params->watchhistory_interval_sec;
      $this->watchhistory_api = $data_config->data->params_hash2->config_params->watchhistory_api;
      // popup details
      $this->popup_details = $data_config->data->params_hash2->config_params->popup_details;

      // when api is false web page show only 
      $this->show_popup = $data_config->data->params_hash2->config_params->popup_details->show_popup;

      // image high 9/16 or 3/4
      $this->images = $data_config->data->params_hash2->config_params->popup_details->images;
      $this->images_high_9_16 = $data_config->data->params_hash2->config_params->popup_details->images->high_9_16;
      $this->images_high_3_4 = $data_config->data->params_hash2->config_params->popup_details->images->high_3_4;

      // other region image 
      $this->other_region_images = $data_config->data->params_hash2->config_params->popup_details->other_region_images;
      $this->other_region_images_high_9_16 = $data_config->data->params_hash2->config_params->popup_details->other_region_images->high_9_16;
      $this->other_region_images_high_3_4 = $data_config->data->params_hash2->config_params->popup_details->other_region_images->high_3_4;

      // redirect_types
      $this->redirect_type = $data_config->data->params_hash2->config_params->popup_details->redirect_type;
      $this->redirect_url = $data_config->data->params_hash2->config_params->popup_details->redirect_url;

      // access token
      $this->access_control = $data_config->data->params_hash2->config_params->access_control;
      $this->access_control_title = $data_config->data->params_hash2->config_params->access_control->title;
      $this->access_control_content_id = $data_config->data->params_hash2->config_params->access_control->content_id;

      // issue list
      $this->issue_list = $data_config->data->params_hash2->config_params->issue_list;
      // payment issue details 

      $this->Payment_issue_key = $data_config->data->params_hash2->config_params->issue_list[0]->key;
      $this->Payment_issue_title = $data_config->data->params_hash2->config_params->issue_list[0]->title;

      // Subscrition issue
      $this->Subscription_issue_key = $data_config->data->params_hash2->config_params->issue_list[1]->key;
      $this->Subscription_issue_title = $data_config->data->params_hash2->config_params->issue_list[1]->title;

      // Content issue
      $this->Content_issue_key = $data_config->data->params_hash2->config_params->issue_list[2]->key;
      $this->Content_issue_title = $data_config->data->params_hash2->config_params->issue_list[2]->title;

      // other issue
      $this->Other_issue_key = $data_config->data->params_hash2->config_params->issue_list[3]->key;
      $this->Other_issue_title = $data_config->data->params_hash2->config_params->issue_list[3]->title;

      // payment_gateway
      $this->payment_gateway = $data_config->data->params_hash2->config_params->payment_gateway;

      $this->Billdesk_gateway = $data_config->data->params_hash2->config_params->payment_gateway[0]->gateway;
      $this->Billdesk_default = $data_config->data->params_hash2->config_params->payment_gateway[0]->default;

      $this->ccavenue_gateway = $data_config->data->params_hash2->config_params->payment_gateway[1]->gateway;
      $this->ccavenue_default = $data_config->data->params_hash2->config_params->payment_gateway[1]->default;
      // app version 
      $this->app_version = $data_config->data->app_version;
      $this->app_version_upgrade_type = $data_config->data->app_version->upgrade_type;
      $this->app_version_message = $data_config->data->app_version->message;

      // regions
      $this->regions = $data_config->data->regions[0];

      // order
      $this->order = $data_config->data->order;
      // type
      $this->type = $data_config->data->type;
      // friendly_id
      $this->friendly_id = $data_config->data->friendly_id;
      //  catalog_id 
      $this->catalog_id = $data_config->data->catalog_id;

      // service 
      $this->service = $data_config->data->service;
      $this->service_min_android_app_version = $data_config->data->service->min_android_app_version;
      $this->service_min_ios_app_version = $data_config->data->service->min_ios_app_version;
      // services data 
      $this->services = $data_config->data->service->services;

      $this->name = $data_config->data->service->services[0]->name;
      $this->dns = $data_config->data->service->services[0]->dns;
      $this->available = $data_config->data->service->services[0]->available;

      $this->users_name = $data_config->data->service->services[1]->name;
      $this->users_dns = $data_config->data->service->services[1]->dns;
      $this->users_available = $data_config->data->service->services[1]->available;

      $this->subscriptions_name = $data_config->data->service->services[2]->name;
      $this->subscriptions_dns = $data_config->data->service->services[2]->dns;
      $this->subscriptions_available = $data_config->data->service->services[2]->available;

      $this->search_name = $data_config->data->service->services[3]->name;
      $this->search_dns = $data_config->data->service->services[3]->dns;
      $this->search_available = $data_config->data->service->services[3]->available;

      $this->recommendations_name = $data_config->data->service->services[4]->name;
      $this->recommendations_dns = $data_config->data->service->services[4]->dns;
      $this->recommendations_available = $data_config->data->service->services[4]->available;

      $this->analytics_name = $data_config->data->service->services[5]->name;
      $this->analytics_dns = $data_config->data->service->services[5]->dns;
      $this->analytics_available = $data_config->data->service->services[5]->available;

      // webservices 
      $this->webservice = $data_config->data->service->webservice;
      // print_r($this->webservice);
      $config_data = $this->BASE_URL . $this->config . "?region=" . $this->country_code2 . "&auth_token=" . $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN;
      $Top_Menu_api = $this->BASE_URL . "catalog_lists/top-menu-web.gzip?nested_list_items=" . $this->List_false . "&auth_token=" . $this->AUTHTOKEN . "&region=" . $this->country_code2 . "&access_token=" . $this->ACCESSTOKEN;
      $Menu_items = $this->usermodel->GETAPIMODEL($Top_Menu_api);
      $Menu_items_data = json_decode($Menu_items);

      $data_Menu_top = $Menu_items_data->data;
      $this->access_tag = $Menu_items_data->data->access_tag;
      $this->ad_banner_ids = $Menu_items_data->data->ad_banner_ids;
      $this->additional_keys = $Menu_items_data->data->additional_keys;
      $this->available_filters = $Menu_items_data->data->available_filters;

      $this->catalog_list_items = $Menu_items_data->data->catalog_list_items;

      if (isset($data_Menu_top->catalog_list_items)) {
         foreach ($data_Menu_top->catalog_list_items as $items) {
            if (isset($items->display_title)) {
               $this->displayTitle = $items->display_title;
               // print_r($this->displayTitle . "<br>");

               return view('Header/header', compact('displayTitle'));
            }
         }
      }

      //  print_r($data_Menu_top);

   }


}

// From Laravel Blade to Vue.js + API [Live-coding Example]