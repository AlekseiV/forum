@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
      <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Create a New Thread</h3>
                  </div>
                  <div class="panel-body">
                    <b>Title:</b>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                      </div>
                      <br>
                    <b>Body:</b>
                      <div class="form-group">
                      <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                      </div>

                      <p><a href="#" class="btn btn-primary" role="button">Publish</a>
                  </div>
                </div>
                @foreach ($countries as $country)
                  @if ($country == "Island")
                    <h1>{{ $country }}</h1>
                  @else
                    <p>{{ $country }}</p>
                  @endif
                @endforeach
            </div>
    </div>
</div>
@endsection
