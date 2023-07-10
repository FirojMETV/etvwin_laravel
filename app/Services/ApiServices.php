<?php
namespace App\Services;

class ApiService
{
    public function APIMODEL($request)
    {

        // Initialize a CURL session.
        $ch = curl_init();

        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $request);

        $result = curl_exec($ch);

        echo $result;

    }
    // public function makeApiRequest($url, $method = 'GET', $data = [])
    // {
    //     $curl = curl_init();

    //     // Set the URL
    //     curl_setopt($curl, CURLOPT_URL, $url);

    //     // Specify request method
    //     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));

    //     // Set the data for POST or PUT requests
    //     if ($method === 'POST' || $method === 'PUT') {
    //         curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    //     }

    //     // Set the option to return the response instead of outputting it
    //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //     // Execute the cURL request
    //     $response = curl_exec($curl);

    //     // Check for errors
    //     if (curl_errno($curl)) {
    //         $error = curl_error($curl);
    //         // Handle the error
    //     }

    //     // Close the cURL session
    //     curl_close($curl);

    //     // Process and return the response
    //     return $response;
    // }
}
