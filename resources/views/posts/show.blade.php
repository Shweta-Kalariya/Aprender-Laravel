@extends('layout.app');
@section('content')
    {{-- @if(count($post)>0) --}}
        <a href="/posts" class="btn btn-default">Go Back</a>
        <div class="card p-3 m-3">
            <div class="row">
                    <div class='col-md-4 col-sm-4'>
                        <img src="/storage/cover_image/{{$post->cover_image}}" />
                    </div>
                    <div class='col-md-8 col-sm-8'>
                        <a href="/posts/{{$post->id}}">
                            <h1>{{$post->title}}</h1>
                            <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
                            <p>{!!$post->body!!}</p>
                        </a>
                    </div>
            </div><hr />
            <div class="row pt-0">
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                    <div class="col-md-1 col-md-sm-1">  
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                    </div>
                    <div class="col-md-1 col-md-sm-1">  
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                    @endif
                @endif
            </div>
        </div>
    {{-- @endif --}}
@endsection