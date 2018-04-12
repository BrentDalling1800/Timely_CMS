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

<div class="d-flex flex-row flex-wrap">
@php
$counter = 0;
@endphp
@while($counter <= count($cards)+1)
@php
$card = $cards['cards'][$counter];
@endphp
<div class="col-md-4">
<div class="card" style="height:100%;">
  <div class="card-body">
    <h5 class="card-title">{{ucfirst($card->title)}} 
    @if(Auth::user()->id == $card->author)
    <a style="float: right;" href="" class=""><i class="material-icons">border_color</i></a>
    @endif</h5>

    <p class="card-text">{{$card->content}}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

@php
$counter = $counter +1;
@endphp
@endwhile
</div>


    
@endsection