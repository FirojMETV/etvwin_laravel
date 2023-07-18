<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class VideoController extends Controller
{
    public function show($filename)
    {
        // Check if the request is coming from the video player
        if (request()->header('Referer') === route('video.show', $filename)) {
            // Serve the video file
            $path = public_path('image/' . $filename);
            return Response::file($path);
        }

        abort(403, 'Unauthorized access.');
    }
}
