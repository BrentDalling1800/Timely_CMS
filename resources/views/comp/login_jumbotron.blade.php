
 <br>
 <br>
 <br>
 <br>
 <div class="d-flex flex-row flex-wrap justify-content-center align-items-top" style="height: 91.7vh;">

<div class="col-md-3" >
	<div class="card card-body" style="background-color: rgba(255, 255, 255, 0.53)">
<img src="{{asset('img/logo.png')}}" class="card-img-top">
<br>
<hr>
<form action="{{url('/')}}/user_login" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="user_id" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="user_password" placeholder="Password">
  </div>
      {{ csrf_field() }}
  <button type="submit" class="btn btn-success" style="width: 49%;">Submit</button>
  <button type="button" class="btn btn-primary" style="width: 49.5%;">Register</button>
</form>
	</div>
</div>

 </div>