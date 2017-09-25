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
                    <form class="" action="/threads" method="post">

                      {{ csrf_field() }}

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
                        <p><button type="submit"   class="btn btn-primary" >Publish</button>
                      </form>
                  </div>
                </div>
            </div>

            <!-- <ol>
            @foreach ($tasks as $task)
              @if ( ! $task["complete"])
                <li><a href="{{$task["anchor"]}}">{{$task["title"]}}</a></li>
              @else
                <li><s><a href="{{$task["anchor"]}}">{{$task["title"]}}</a></s></li>
              @endif
            @endforeach
            </ol> -->

    </div>
</div>
@endsection
