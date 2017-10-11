@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
      <div class="col-md-8 col-md-offset-2">
        @include("threads.error")
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Create a New Thread</h3>
                  </div>
                  <div class="panel-body">
                    <form class="" action="/threads" method="post">

                      {{ csrf_field() }}

                      <?php
                      session_start();
                      ?>
                      <b>Title:</b>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"></span>
                          <input value="{{old("title")}}" type="text" name="title" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                      <b>Body:</b>
                        <div class="form-group">
                        <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7">{{old("message")}}</textarea>
                        </div>
                        <p><button type="submit" class="btn btn-primary" >Publish</button>
                      </form>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection
