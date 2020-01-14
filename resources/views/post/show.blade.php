@extends('frame.main')
@section('title')
Showing Data
@endsection
@section('content')
<div class="row">
@foreach($post as $p)

<div class="col-sm-4">
<ul class="list-group p-5 m-4">
  <li class="list-group-item active">{{$p->title}}</li>
  <li class="list-group-item">{{$p->content}}</li>
  <li class="list-group-item">
  
  </li>
  



  
  {!!Form::model($post, ['route' => ['post.show', $p->id]])!!}
  @method('Get')
  {!!Form::submit('Detail',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
</ul>
</div>


@endforeach
</div>
@endsection