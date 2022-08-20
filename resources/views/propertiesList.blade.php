@extends('layouts.app')

@section('content')

<div class="h1">
    Properties page {{$JSON['pagination']['page']}}
</div>

<!--This for loop adds all the properties of the current page to the DOM-->
@foreach($JSON['content'] as $property)
    <hr>
    <a href="/property/{{$property['public_id']}}" class="text-decoration-none text-dark">
        <div class="row justify-content-around">
            <div class="col">
                <img src="{{$property['title_image_thumb']}}" alt="Image not available">
            </div>
            <div class="col">
                <h6 class="row">{{$property['title']}} ({{$property['public_id']}})</h6>
                <p class="row">Type: {{$property['property_type']}}</p>
                <p class="row">Location: {{$property['location']}}</p>
            </div>
        </div>
    </a>
@endforeach

<!--This section is for the pages navigation-->
<div>
    @if($JSON['pagination']['page']>1)
    <a href="/propertiesList/{{$JSON['pagination']['page']-1}}">Back</a>
    @endif    
    @if(!is_null($JSON['pagination']['page']))
    <a href="/propertiesList/{{$JSON['pagination']['page']+1}}">Next</a>
    @endif
</div>
@endsection('content')