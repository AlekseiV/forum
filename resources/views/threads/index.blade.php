@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($threads as $thread)
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b><p> {{ $thread["title"] }} </p></b></div>
                <ul class="list-group">
                  <div class="list-group-item">
                    <p>{{ $thread["body"]}}</p>
                  </div>
                </ul>
              </div>
              @endforeach
        </div>
    </div>
</div>
@endsection
