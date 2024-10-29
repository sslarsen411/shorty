<?php

namespace App\Http\Controllers;

use App\Models\LocationLink;
use Illuminate\Http\Request;

class ShortyController extends Controller{
    public function show($shortUrl){
        $link = LocationLink::where('link', $shortUrl)->first();
        if (!$link)
            abort(404);        
        return redirect("https://tsrapp.test/?loc={$link->location_id}");
    }
}
