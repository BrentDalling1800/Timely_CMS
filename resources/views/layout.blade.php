<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css_includes')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>CodeHub: @if(isset($page['page_title'])) {{$page['page_title']}} @endif</title>

  </head>
  <body data-spy="scroll" data-target="#nav_codehub">

    <style>
    .card {
       border: none;
       -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
    }

    .card-link:hover {
padding: 5px;
    margin: -5px;
-webkit-box-shadow: 1px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 1px 2px 7px 0px rgba(0,0,0,0.75);
    }

    .material-icons {
      margin-top: -3px;
      vertical-align: middle!important;
    }

    .btn {
      border-radius: 0px;
      border: 0px;
      padding: .75em;
    }
  </style>
















  <!-- Bootstrap Default Nav Bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" class="img-fluid" style="max-width: 150px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   @if(!isset(Auth::user()->name))
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/about">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/')}}/register">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/')}}/login">Login</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @else
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#admin_modal">Services</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/')}}/dash">Dashboard</a>
          @if(Auth::user()->roles == 'admin')<a class="dropdown-item" href="{{url('/')}}/page_edit_selector">Site Settings</a>@endif
          <a class="dropdown-item" href="{{url('/')}}/settings">User Settings</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/')}}/logout">Logout</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
   @endif
  </div>
</nav>




<div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="admin_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="admin_modal">Login To Access User Features</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--End Nav bar -->















    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
    @yield('js_includes')

    @yield('js_scripts')
  
  </body>
</html>