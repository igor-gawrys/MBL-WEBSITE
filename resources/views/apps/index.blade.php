@extends('layouts.app')

@section('content')
<section>
<img class="background-image" src="/static/images/background.jpg" ></img>
<div class="overlay container-fluid" >
 <div class="row justify-content-center text-white">
  <div class='col-md-6 text-center header'>
    <h2>Aplikacje użytkowników</h2>
  @foreach( $apps as $app )
    <div class='card card-dark'>
      <div class='card-header'>
        {{ $app->title }}
      </div>
      <div class='card-body'>
        {{ $app->description }}
      </div>
      <div class='card-footer'>
          <a href="{{ route( 'apps.show', $app->id ) }}" class='btn btn-red btn-block'>Dowiedz się więcej..</a>
      </div>
  @endforeach
 </div>
</div>
</section>
@endsection
