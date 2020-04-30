@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default"> Go Back</a>
<h1> {{$post->title}}</h1>
<img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
<br><br>
<div>
{{$post->body}}
</div>
<hr>
<small> written on{{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            <hr>
            {!!form::open(['action' => ['PostsController@destroy' , $post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
                {{form::hidden('_method', 'DELETE')}}
                {{form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!form::close()!!}
        @endif
@endif

@endsection