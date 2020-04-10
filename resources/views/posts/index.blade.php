
@extends('layouts.app')

@section('content')
<style>
    #pa{
        color: black;
    }
</style>
    <h1>Posts</h1>
    @if (count($posts)>0)
    @foreach ($posts as $pt)
    
        <div class="card card-body bg-light "  >
            <div class="row">
            <div >
            <img class="card-img-top" style="width:250px" height="250px;" src="/storage/cover_images/{{$pt->cover_image}}">
            </div>
            
            <div class="col-sm-8 " >
                <h1> <a id="pa" href='/posts/{{$pt->id}}'>{{$pt->title}}</h1>
                    <small >Written on {{$pt->created_at}} by {{$pt->user->name}}</small>
            </div>
            </div></div>
        
        
        <br>
    @endforeach 
    {{$posts->links()}}   
    @else
    
    <h4>No Posts Available</h4>
    @endif
@endsection