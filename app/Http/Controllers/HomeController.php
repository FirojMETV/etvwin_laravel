<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use DateTimeZone;

class HomeController extends Controller
{
     public
   $BASE_URL = "https://stagingott.etvwin.com/";
   public $AUTHTOKEN = "q5u8JMWTd2698ncg7q4Q";
   protected $apiKey;
   public $UserIP = "regions/autodetect/ip.gzip";
   public $ACCESSTOKEN = '';
   protected $apiBaseUrl;

   public $config = 'catalogs/message/items/app-config-params.gzip';
   public $usermodel = '';

   public function __construct()
   {
      $this->apiBaseUrl = config('services.api.base_url');
      $this->apiKey = config('services.api.api_key');

      $url = $this->BASE_URL . "access_token.gzip?auth_token=" . $this->AUTHTOKEN;
      $this->usermodel = new User;
      $data = $this->usermodel->GETAPIMODEL($url);
      $data = json_decode($data);
      $this->ACCESSTOKEN = $data->data->access_token;
   }
   // Territory786
   public function HomeControl()
   {
      $HomeApi = $this->BASE_URL . "catalog_lists/home.gzip?item_language=" . "eng&region=" . "IN&auth_token=" .
         $this->AUTHTOKEN . "&access_token=" . $this->ACCESSTOKEN . '&page=0' . '&page_size=5' . '&npage_size=10';
      $HomeData = $this->usermodel->GETAPIMODEL($HomeApi);
      // var_dump($HomeApi);
      $Home_data_items = json_decode($HomeData);
      $catalog_list_itmes = $Home_data_items->data->catalog_list_items;
      $web_banner_url = [];
      $mobile_size_url = [];
      $medium_3_4 = [];
      $high_4_3 = [];
      $continue = [];
      $web_banner_urls = [];
      $show_name = [];
      $title = [];
      $release_date_string = [];
      $publishday = [];

      foreach ($catalog_list_itmes as $outer_item) {
         $layout_type = $outer_item->layout_type;
         if ($layout_type === 'top_banner') {
            foreach ($outer_item->catalog_list_items as $inner_item) {
               if (isset($inner_item->thumbnails->web_banner->url)) {
                  $web_banner_url[] = $inner_item->thumbnails->web_banner->url;
               }
               if (isset($inner_item->thumbnails->high_4_3->url)) {
                  $mobile_size_url[] = $inner_item->thumbnails->high_4_3->url;
               }
            }
         }
         if ($layout_type === 'etv-exclusive') {
            foreach ($outer_item->catalog_list_items as $inner_item) {
               if (isset($inner_item->thumbnails->web_banner->url)) {
                  $web_banner_urls[] = $inner_item->thumbnails->web_banner->url;
               }
               if (isset($inner_item->thumbnails->high_4_3->url)) {
                  $mobile_size_url[] = $inner_item->thumbnails->high_4_3->url;
               }
            }
         }
         if ($layout_type === 'tv_shows') {
            foreach ($outer_item->catalog_list_items as $inner_item) {
               if (isset($inner_item->thumbnails->medium_3_4->url)) {
                  $medium_3_4[] = $inner_item->thumbnails->medium_3_4->url;
               }
            }
         }
         if ($layout_type === 'episode') {
            foreach ($outer_item->catalog_list_items as $inner_item) {
               $sequence_no = $inner_item->sequence_no;
               $show_name[] = $inner_item->show_name;

               $title[] = $inner_item->title;
               $release_date_string[] = $inner_item->release_date_string;
               foreach ($release_date_string as $dateday) {

                  $inputDate = new DateTime($dateday, new DateTimeZone('UTC'));
                  $currentDate = new DateTime('now', new DateTimeZone('UTC'));
                  $interval = $currentDate->diff($inputDate);
                  $daysDifference = $interval->days;
                  $hoursDifference = $interval->h;
                  if ($daysDifference > 1) {
                     $publishday[] = $inputDate->format('d M y'); // Full date format
                  } elseif ($hoursDifference > 0) {
                     $publishday[] = "Last {$hoursDifference} hour(s) ago";
                  } else {
                     return "Just now";
                  }
                  // var_dump($publishday);
               }
               if (isset($inner_item->thumbnails->medium_16_9->url)) {
                  $high_4_3[] = $inner_item->thumbnails->medium_16_9->url;
               }
               if (isset($inner_item->sequence_no)) {
                  $sequence_nos = $inner_item->sequence_no;
               }
            }
         }
         if ($layout_type === 'continue_watching') {
            foreach ($outer_item->catalog_list_items as $inner_item) {
               if (isset($inner_item->thumbnails->l_large->url)) {
                  $continue[] = $inner_item->thumbnails->l_large->url;
               }
            }
         }
      }

    
       
      return view('home.home',compact( 'web_banner_url' ,'mobile_size_url','layout_type' ,'medium_3_4','high_4_3' ,'web_banner_urls' ,'sequence_nos', 'continue','show_name','title','publishday' ));
   }


}