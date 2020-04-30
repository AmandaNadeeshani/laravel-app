@extends('layouts.app')

@section('content')

<div class="jumbotron">
<h1> Posts</h1>
<hr>
@if(count($posts)>0)
<div class="row">
@foreach ($posts as $post)
<div class ="well" >
<br>
<div class="col-md-4 col-sm-4">
        <div class="card" style="width: 18rem;">
            <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
        
            <div class="card-body">
        
       <h3><a href="/posts/{{$post->id}} ">{{$post->title}} </h3>       
       <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
    
    </div>
    </div>
    </div>
@endforeach
{{$posts->links()}}
@else
<p>No Posts found </p>
@endif
@endsection