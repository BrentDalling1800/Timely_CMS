@extends('layout')

@section('content')

@if(isset($jumbotron))
@include('comp/jumbotron', (array)$jumbotron)
@endif

@if(isset($htmls))
@include('comp/doc_nav', (array)$htmls)
@endif

@if(isset($htmls))
@include('comp/doc_item', (array)$htmls)
@endif


    
@endsection