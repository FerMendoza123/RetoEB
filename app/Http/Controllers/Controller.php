<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function propiertiesList($idPage)
    {
        $reqURL=NULL;
        if(!isset($idPage))
        {
            $reqURL = 'https://api.stagingeb.com/v1/properties?page=1&limit=15&search%5Bstatuses%5D%5B%5D=published';
        }
        else
        {
            $reqURL = 'https://api.stagingeb.com/v1/properties?page='.$idPage.'&limit=15&search%5Bstatuses%5D%5B%5D=published';
        }


        $response = Http::withHeaders(['content-type' => 'application/json', 
                                    'X-Authorization'=> 'l7u502p8v46ba3ppgvj5y2aad50lb9'])->get($reqURL);
        $JSON = $response->json();

        return view("propertiesList")->with('JSON',$JSON);
    }

    public function propertyPage($idProp)
    {
        return redirect('/');
    }
}
