@extends('layout')

@section('content')

@if(isset($jumbotron))
@include('comp/jumbotron', (array)$jumbotron)
@endif
    
@endsection