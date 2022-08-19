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
    public function getJSON($reqURL)
    {
        $response = Http::withHeaders(['content-type' => 'application/json', 
                                    'X-Authorization'=> 'l7u502p8v46ba3ppgvj5y2aad50lb9'])->get($reqURL);
        return $response->json();
    }

    public function propiertiesList($idPage)
    {

        $JSON = $this->getJSON('https://api.stagingeb.com/v1/properties?page='.$idPage.'&limit=15&search%5Bstatuses%5D%5B%5D=published');
        return view("propertiesList")->with('JSON',$JSON);
    }

    public function propertyPage($idProp)
    {
        $JSON = $this->getJSON('https://api.stagingeb.com/v1/properties/'.$idProp);
        return view('property')->with('property',$JSON);
    }

    public function printValidData($data, $tag, $label)
    {
        if(!(empty($data) || ctype_space($data)))
        {
            echo '<'.$tag.'>'.$label.': '.$data.'</'.$tag.'>';
        }
    }

    
}
