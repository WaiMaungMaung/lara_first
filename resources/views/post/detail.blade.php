@extends('frame.main')
@section('title')

@endsection
@section('content')
{{$post->title}}<br>
{{$post->content}}
@if($post->is_admin)
<h3>author admin</h3>

@else
<h3>author unknown</h3>
@endif


@endsection