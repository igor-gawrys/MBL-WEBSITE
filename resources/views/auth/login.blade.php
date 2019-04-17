@extends('layouts.app')

@section('content')
<section>
<img class="background-image" src="/static/images/background.jpg" ></img>
<div class="overlay container-fluid" >
 <div class="row justify-content-center text-white" >
  <div class='col-md-6 text-center header' >
    <div class='card card-dark'>
      <div class='card-header'>
        Logowanie
      </div>
      <div class='card-body' >
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <input type="email" class="form-control" placeholder="Email" />
          <input type="password" class="form-control mt-3" placeholder="Password" />
        </form>
      </div>
      <div class='card-footer'>
          <a href="#" class='btn btn-red btn-block'>Zaloguj się</a>
      </div>
 </div>
</div>
</section>
@endsection
