<div class="container">
<div class="d-flex flex-row flex-wrap">

@foreach($pages as $item)
<div class="col-md-4" style="margin-bottom: 15px;">
<div class="card" style="height:100%;">
  <img class="card-img-top" src="{{$item->page_cover_img}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$item->page_title}}</h5>
    <p class="card-text">{{$item->page_seo}}</p>

  
  </div>

  <div class="card-footer">
   <div class="row">
<div class="col-md-6">
 <div class="btn-group" role="group" aria-label="Basic example">
 <a href="{{url('/')}}/page_tool/{{$item->page_title}}" class="btn btn-primary"><i class="material-icons">mode_edit</i></a>
    <a href="{{url('/')}}/page_tool/{{$item->page_title}}" class="btn btn-success"><i class="material-icons">publish</i></a>
    <a href="{{url('/')}}/page_tool/{{$item->page_title}}" class="btn btn-danger"><i class="material-icons">delete_forever</i></a>
</div>
</div>
<div class="col-md-6 text-right">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->page_title}}">
  <i class="material-icons">verified_user</i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->page_title}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Access</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	</div>
   </div>
</div> 
</div>
</div>
@endforeach

</div>
</div>