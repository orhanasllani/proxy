<?php

namespace App\Http\Controllers;

use App\Services\Beers;

class BeersController extends Controller
{
    public $beerService;

    public function __construct()
    {
        $this->beerService = new Beers;
    }
    public function index()
    {

        return $this->beerService->get();
    }
}
