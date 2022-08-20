<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    #This function loads a page for the list
    public function loadPage($idPage)
    {
        $JSON = $this->getJSON('https://api.stagingeb.com/v1/properties?page='.$idPage.'&limit=15&search%5Bstatuses%5D%5B%5D=published');
        session(['currPage' => $idPage]);
        return view("propertiesList")->with('JSON',$JSON);
    }
}
