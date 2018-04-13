@extends('layout')

@section('content')

<div class="col-md-12" style="padding: 0px;margin-bottom: -17px;">
	<div class="alert alert-secondary" style="border-radius: 0px;">
		<div class="row">
			<div class="col-md-2">
				<button class="btn btn-secondary">Editing as {{ucfirst(Auth::user()->name)}}
</button>			
			</div>
			<div class="col-md-10">
				<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#" data-toggle="tooltip" data-placement="bottom" title="Add A Page Element"><i class="material-icons">add_to_queue</i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"data-toggle="tooltip" data-placement="bottom" title="Edit A Page Element"><i class="material-icons">mode_edit</i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom" title="Create A Page Element"><i class="material-icons">create_new_folder</i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom" title="Save Or Discard Your Page"><i class="material-icons">save</i></a>
  </li>
</ul>
			</div>
		</div>
	</div>
</div>

<a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" style="text-decoration: none; color: white;">
@if(isset($jumbotron))
@include('comp/jumbotron', (array)$jumbotron)
@endif
</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
         {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="jumbo_title" placeholder="Code Hub" value="{{$jumbotron->title}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Sub Title</label>
      <input type="text" class="form-control" id="jumbo_sub" placeholder="The Place For Code" value="{{$jumbotron->sub_title}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Background Image</label>
    <input type="text" class="form-control" id="background_image" placeholder="https://image.com/image/url/.jpg" value="{{$jumbotron->background->image}}">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Text Color</label>
    <input type="text" class="form-control" id="text_color" placeholder="black || #000000" value="{{$jumbotron->color}}">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Background Position</label>
      <input type="text" class="form-control" id="background_position" placeholder="center || bottom" value="{{$jumbotron->background->position}}">
    </div>

  </div>
  <button type="button" class="btn btn-block btn-outline-secondary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Edit Buttons
  </button>
<div class="collapse" id="collapseExample">
  <div class="">
    <form>

@php ($counter = 0)
@foreach($jumbotron->button as $button)

      <div id="button_group">
        <hr><center><h5 class="display-5">Button {{$counter + 1}}</h5></center>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Text</label>
      <input type="text" class="form-control" id="jumbo_button_text_{{$counter}}" placeholder="Code Hub" value="{{$button->text}}">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Link</label>
      <input type="text" class="form-control" id="jumbo_button_url_{{$counter}}" placeholder="The Place For Code" value="{{$button->url}}">
    </div>
        <div class="form-group col-md-12">
      <label for="inputPassword4">Bootstrap Class</label>
      <input type="text" class="form-control" id="jumbo_button_css_{{$counter}}" placeholder="The Place For Code" value="{{$button->css}}">
    </div>
  </div>
      </div>
      @php ($counter++)

        
@endforeach

<button type="button" class="btn btn-block  btn-primary" id="buttons_submit">Save Buttons</button>
    </form>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="jumbo_submit">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('js_includes')
<script src="{{asset('js/page_edit.js')}}"></script>
@endsection

@section('js_scripts')
<script>
var page = '{{$page['page_title']}}';
var base_url = '{{url('/')}}';
window.page_edit_jumbo = new jumbotron_edit();
window.page_edit_jumbo.start();
</script>
@endsection