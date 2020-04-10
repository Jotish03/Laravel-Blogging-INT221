@extends('layouts.app')
@section('content')

<a  href="/posts" class="btn  btn-sm" style="background-color:black;color:white;float:right;">Go Back</a>
<br><br>
<h1>{{$post->title}}</h1>
<img style="width:20%;height:20%" src="/storage/cover_images/{{$post->cover_image}}"><br>
<br>
<div style="color:black;">{!!$post->body!!}</div>
<hr>
<small style="color:black;">
    Wriiten on {{$post->created_at}} <b> by {{$post->user->name}}</b>
</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
<a  href="/posts/{{$post->id}}/edit" class="btn btn-dark btn-sm">Edit Post</a>

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete Post',['class'=>'btn btn-danger btn-sm'])}}
{!!Form::close()!!}
    @endif
@endif
@endsection