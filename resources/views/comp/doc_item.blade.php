@foreach($htmls as $html)
<div class="doc_items" id="{{$html->name}}">
<div class="container">
<div class="row">
  <div class="col-md-6">
    <h5 class="display-5">{{$html->name}}</h5>
    <hr>
    <p>
      <blockquote class="blockquote">
  <p class="mb-0">{{$html->description}}</p>
  <footer class="blockquote-footer">Element Created By <cite title="Source Title">{{$html->creator}}</cite></footer>
</blockquote>

{{$html->content}}

    </p>
  </div>
  <div class="col-md-6">
    <div class="card card-body">
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
         <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne{{$html->name}}" aria-expanded="false" aria-controls="collapseOne{{$html->name}}">
          HTML Code
        </button>
      </h5>
    </div>

    <div id="collapseOne{{$html->name}}" class="collapse" aria-labelledby="headingOne{{$html->name}}" data-parent="#accordion">
      <div class="card-body">
    <pre class="text-secondary">
        {{htmlspecialchars($html->html_snip)}}
      </pre>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo{{$html->name}}">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$html->name}}" aria-expanded="false" aria-controls="collapseTwo{{$html->name}}">
          PHP Code
        </button>
      </h5>
    </div>
    <div id="collapseTwo{{$html->name}}" class="collapse" aria-labelledby="headingTwo{{$html->name}}" data-parent="#accordion">
      <div class="card-body">
      <pre class="text-secondary">
        {{htmlspecialchars($html->php_snip)}}
      </pre>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingThree{{$html->name}}">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree{{$html->name}}" aria-expanded="false" aria-controls="collapseThree{{$html->name}}">
          Example Code
        </button>
      </h5>
    </div>
    <div id="collapseThree{{$html->name}}" class="collapse" aria-labelledby="headingThree{{$html->name}}" data-parent="#accordion">
      <div class="card-body">
      <pre class="text-secondary">
        {{htmlspecialchars($html->example_snip)}}
      </pre>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>
</div>
</div>
<br>
  <center>
    <hr style="width: 50%; color: grey;">
  </center>
<br>
@endforeach