<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    #This function loads the property view
    public function loadProperty($idProperty)
    {
        $JSON = $this->getJSON('https://api.stagingeb.com/v1/properties/'.$idProperty);
        return view('property')->with('property',$JSON);
    }
    #This function sends the post request for the contact
    public function postContactReq(Request $request)
    {
        $response = Http::withHeaders([
            'content-type' => 'application/json', 
            'X-Authorization'=> 'l7u502p8v46ba3ppgvj5y2aad50lb9'
        ])->post('https://api.stagingeb.com/v1/contact_requests',[
            'property_id' => $request->input('property_id'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'source' => 'retoEB.com'
        ]);

        if(isset($response['status']))
            return redirect()->back()->with('status',$response['status']);
        if(isset($response['error']))
            return redirect()->back()->with('error',$response['error']);
    }
    #This function prints only a non-empty attribute
    public function printValidData($data, $tag, $label)
    {
        if(!(empty($data) || ctype_space($data)))
        {
            echo '<'.$tag.'>'.$label.': '.$data.'</'.$tag.'>';
        }
    }
}
