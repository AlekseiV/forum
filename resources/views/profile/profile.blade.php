@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $names[0]->name }}<small> meðlimur siðan {{ $joined[0]->created_at }}</small></h1>
    <div class="row">
      INFORMATION
        <div class="col-md-8 col-md-offset-2">
            @foreach ($threadsinfo as $info)
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b> {{ $info[0]->nafn }} </b></div>
                <ul class="list-group">
                  <div class="list-group-item">
                    {{ $info[1]->published }}
                  </div>
                </ul>
              </div>
              @endforeach
        </div>
    </div>
</div>
@endsection
