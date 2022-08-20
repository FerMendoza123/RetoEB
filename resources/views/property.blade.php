@extends('layouts.app')

@section('content')
<div>
    <h5>{{$property['title']}}({{$property['public_id']}})</h5>
    <p>{{$property['description']}}</p>



    
    <section>
        {{ App\Http\Controllers\PropertyController::printValidData($property['location']['name'], 'p', 'Location'); }}
        {{ App\Http\Controllers\PropertyController::printValidData($property['location']['street'], 'p', 'Street'); }}
        {{ App\Http\Controllers\PropertyController::printValidData($property['location']['latitude'], 'p', 'Latitude'); }}

        {{ App\Http\Controllers\PropertyController::printValidData($property['location']['longitude'], 'p', 'Longitude'); }}
        {{ App\Http\Controllers\PropertyController::printValidData($property['location']['postal_code'], 'p', 'Postal code'); }}
 
        @if($property['location']['show_exact_location'])
            {{ App\Http\Controllers\PropertyController::printValidData($property['location']['exterior_number'], 'p', 'Exterior number'); }}
            {{ App\Http\Controllers\PropertyController::printValidData($property['location']['interior_number'], 'p', 'Interior number'); }}
        @endif
    </section>
    

    <!--Form-->
    <hr>
    <h5>Contact Request</h5>
    <form action = "/property/sendContactReq" method = "POST">
        <input type="text" name="property_id" value="{{$property['public_id']}}" hidden>
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="message">Message</label>
            <input type="text" class="form-control" id="message" name="message">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(Session::has('status'))
        <p class="bg-success">{{session('status')}}</p>
    @endif
    @if(Session::has('error'))
        <p class="bg-danger">{{session('error')}}</p>
    @endif

</div>

@endsection('content')