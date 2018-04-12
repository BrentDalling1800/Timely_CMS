<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -30px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Components
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          @foreach($htmls as $html)
          	<a class="dropdown-item" href="#{{$html->name}}">{{$html->name}}</a>
          @endforeach
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" id="doc_search" placeholder="Search Elements" aria-label="Search">
    </form>
  </div>
</nav>
<br>
<br>


@section('js_includes')

<script src="{{ asset('js/doc_search.js') }}"></script>

@endsection

@section('js_scripts')

<script>
console.log("CodeHub Docs Search Module Loaded");
window.doc_search = new doc_search();
window.doc_search.start();

</script>

@endsection