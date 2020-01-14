@extends('frame.main')
@section('title')
Creating post
@endsection
@section('content')

<div class='offset-5 col-sm-8 my-3'>
<h3 class='alert'>Creating Post</h3>
{!!Form::open(['method'=>'post','action'=>'PostController@store'])!!}
{!!Form::text('title',null,['class'=>'form-control col-sm-3','placeholder'=>'Title'])!!}<br>
{!!Form::textarea('content',null,['class'=>'form-control col-sm-3 mb-3','placeholder'=>'Content'])!!}


{!!Form::label('is_admin','Are you admin')!!}
Yes{!!Form::radio('is_admin','1')!!}
No{!!Form::radio('is_admin','0')!!}<br>
{!!Form::submit('submits',['class'=>'btn btn-alert'])!!}
{!!Form::close()!!}
</div>

@endsection


