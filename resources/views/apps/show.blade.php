@extends('layouts.app')

@section('content')
<section>
<img class="background-image" src="/static/images/background.jpg" ></img>
<div class="overlay container-fluid" >
 <div class="row justify-content-center text-white" >
  <div class='col-md-12 text-center header-app' >
    <div class='card card-dark'>
      <div class='card-header'>
        {{ $app->title }}
      </div>
      <div class='card-body' >
       @foreach( $app->images as $image )
               <img src="{{ $image }}" class='rounded image-responsive' >
       @endforeach
      </div>
      <div class='card-body'>
        {{ $app->description }}
      </div>
      <div class='card-footer'>
          <a href="#" class='btn btn-red btn-block'>Zainstaluj z MS STORE</a>
      </div>
 </div>
</div>
</section>
@endsection
