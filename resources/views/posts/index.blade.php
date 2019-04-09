@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3 m-3">
                <div class="row">
                    <div class='col-md-4 col-sm-4'>
                        <img src="/storage/cover_image/{{$post->cover_image}}" />
                    </div>
                    <div class='col-md-8 col-sm-8'>
                        <a href="/posts/{{$post->id}}">
                            <h3>{{$post->title}}</h3>
                            <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
        @else
        <h3>No Post Found</h3>
    @endif
@endsection