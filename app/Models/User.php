<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function GETAPIMODEL($request)
    {

        // Initialize a CURL session.
        // $ch = curl_init();

        // // Return Page contents.
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // //grab URL and pass it to the variable.
        // curl_setopt($ch, CURLOPT_URL, $request);

        // $result = curl_exec($ch);

        // // echo $result;
        // return $result;
        $data = file_get_contents($request);
        return $data;
    }
    public function POSTAPIMODEL($request, $array)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query($array)
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        return $server_output;
    }
}
;