<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Beers extends Service
{
    public function get()
    {
        $response = Http::get('https://api.punkapi.com/v2/beers');

        return response($response);
    }
}
