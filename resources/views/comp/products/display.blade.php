<div class="container">
	<div class="d-flex flex-row flex-wrap">


		@foreach($products as $item)
			<div class="col-md-3">
				<a href="{{url('/')}}{{$item->link}}" style="text-decoration: none; height: 100%;">
<div class="card card-link">
					<div class="card-body">
 {{$item->name}}
  <footer class="blockquote-footer">{{$item->description}} <cite title="Source Title">MRC: ${{$item->cost}}</cite></footer>

					</div>
				</div>
				</a>
				<br>
			</div>
		@endforeach


	</div>
</div>