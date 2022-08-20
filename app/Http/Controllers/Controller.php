<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getJSON($reqURL)
    {
        $response = Http::withHeaders(['content-type' => 'application/json', 
                                        'X-Authorization'=> 'l7u502p8v46ba3ppgvj5y2aad50lb9'])->get($reqURL);
        return $response->json();
    }
}
