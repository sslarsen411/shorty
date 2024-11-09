<?php

namespace App\Http\Controllers;

use App\Models\LocationLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShortyController extends Controller{
    public function show($shortUrl){
        $redirect = 'https://twoshakes.app';
        if (App::environment('local')) {
           $redirect = 'https://tsrapp.test';
        }
        $link = LocationLink::where('link', $shortUrl)->first();
        if (!$link)
            abort(404);        
        return redirect("$redirect/?loc={$link->location_id}");
    }
}
