@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><b>{{ $thread->title }}</b></div>
            <ul class="list-group">

              <div class="list-group-item">
                  {{ $thread->message }}
              </div>

            </ul>
          </div>
        </div>
    </div>
</div>
@endsection
