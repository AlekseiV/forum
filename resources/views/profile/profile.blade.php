@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $names[0]->name }}<small> meðlimur siðan {{ $joined[0]->created_at }}</small></h1>
      <div class="row">
        <div class="col-md-9">
            @foreach ($threadsinfo as $info)
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b> {{ $names[0]->name }} published <a href="{{ $info["anchor"] }}">{{ $info["published"] }}</a></b></div>
                <ul class="list-group">
                  <div class="list-group-item">
                    {{ $info["body"] }}
                  </div>
                </ul>
              </div>
              @endforeach
        </div>
        <div class="col-md-3">
          <div class="panel">
            <div class="panel-heading">Nafn : {{$names[0]->name}}</div>
                <div class="panel-heading">Netfang : {{$email[0]->email}}</div>
                <div class="panel-heading">Fjöldi þráða : 14</div>
            </div>
        </div>
    </div>
</div>
@endsection
