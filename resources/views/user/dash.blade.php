@extends('layout')

@section('content')
    
@if(isset($jumbotron))
@include('comp/dash_jumbotron', (array)$jumbotron)
@endif

@if(isset($products))
@include('comp/products/display', (array)$products)
@endif


@endsection