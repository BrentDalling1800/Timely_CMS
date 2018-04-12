@extends('layout')

@section('content')
    
<div class="jumbotron" style="padding: 0px;background-image: url('https://images.unsplash.com/photo-1505977404378-3a0e28ec6488?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=87788ec542896437a3bf5e69de7ecacd&auto=format&fit=crop&w=1778&q=80'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
  <div style="background-color:  rgba(0,0,0, 0.64); color: white; margin: 0px; padding: 50px;">
<h1 class="display-4">404 Error</h1>
  <p class="lead">Looks Like Carl F$*&d Up Again. Page Went AWOL Like Carl Back In O'4. </p>
  <hr class="my-4">
  <p>Go Back Or Follow Navbar Above.</p>
  <a class="btn btn-primary btn-lg" href="{{url()->previous()}}" role="button">Go Back</a>
  </div>
</div>

@endsection