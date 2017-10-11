@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($threads as $thread)
            <a href="threads/{{ $thread->id }}" style="text-decoration: none; color:black">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div style="color:black"; class="panel-heading"><b> {{ $thread->title }} </b></div>
                <ul class="list-group">
                  <div class="list-group-item">
                    {{ $thread->message }}
                  </div>
                </ul>
              </div>
            </a>
              @endforeach
        </div>
    </div>
</div>
@endsection
