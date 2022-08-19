@extends('layouts.app')

@section('content')
<div>
    <h5>{{$property['title']}}({{$property['public_id']}})</h5>
    <p>{{$property['description']}}</p>

    <!--Imagenes-->

    
    <section>
        {{ App\Http\Controllers\Controller::printValidData($property['location']['name'], 'p', 'Location'); }}
        {{ App\Http\Controllers\Controller::printValidData($property['location']['street'], 'p', 'Street'); }}
        {{ App\Http\Controllers\Controller::printValidData($property['location']['latitude'], 'p', 'Latitude'); }}

        {{ App\Http\Controllers\Controller::printValidData($property['location']['longitude'], 'p', 'Longitude'); }}
        {{ App\Http\Controllers\Controller::printValidData($property['location']['postal_code'], 'p', 'Postal code'); }}
 
        @if($property['location']['show_exact_location'])
            {{ App\Http\Controllers\Controller::printValidData($property['location']['exterior_number'], 'p', 'Exterior number'); }}
            {{ App\Http\Controllers\Controller::printValidData($property['location']['interior_number'], 'p', 'Interior number'); }}
        @endif
    </section>
    

    <!--Form-->

</div>

@endsection('content')