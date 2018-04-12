@extends('layout')

@section('content')

@if(isset($jumbotron))
@include('comp/jumbotron', (array)$jumbotron)
@endif

@if(!empty($pages))
@include('comp/page_edit/page_display', (array)$pages)
@endif

    
@endsection