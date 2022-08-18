@extends('layouts.app')

@section('content')

<div class="h1">
    adsad
</div>

<!--This for loop adds all the properties of the current page to the DOM-->
@foreach($JSON['content'] as $property)
    <a href="/property/{{$property['public_id']}}" class="text-decoration-none text-dark">
        <div class="row">
            <div class="col-2">
                <img src="{{$property['title_image_thumb']}}" alt="Image not available">
            </div>
            <div class="col-5">
                <span class="row">ID: {{$property['public_id']}}</span>
                <span class="row">Title: {{$property['title']}}</span>
                <span class="row">Type: {{$property['property_type']}}</span>
                <span class="row">Location: {{$property['location']}}</span>
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