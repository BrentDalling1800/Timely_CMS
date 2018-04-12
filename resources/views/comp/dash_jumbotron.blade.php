

<div class="jumbotron jumbotron-fluid" style="background-image: url({{$jumbotron->background->image}}); background-position: {{$jumbotron->background->position}}; background-size: {{$jumbotron->background->size}}; background-repeat: {{$jumbotron->background->repeat}}; border-radius: 0px; color: {{$jumbotron->color}}">
  <div class="container">
    <h1 class="display-4">{{ucfirst($user)}}'s Dashboard</h1>
    <p class="lead">{{$jumbotron->sub_title}}</p>
    <br>

    @foreach($jumbotron->button as $button)
    <a href="{{$button->url}}" class="{{$button->css}}">{{$button->text}}</a>
    @endforeach
  </div>
</div>

