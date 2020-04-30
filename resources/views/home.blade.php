@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="pannel body">
                        <a href="/posts/create" class="btn btn-primary"> Create Post</a>
                         <hr>
                        <h4> Your Blog Post</h4>
                    </div>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th >Title</th>
                            <th >Edit Post</th>
                            <th >Delete Post</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($posts as $post)
                          <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>{!!form::open(['action' => ['PostsController@destroy' , $post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
                                {{form::hidden('_method', 'DELETE')}}
                                {{form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!!form::close()!!}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    @else 
                    <p style="text-align: center"> you have no post yet posted</p>
                @endif
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
