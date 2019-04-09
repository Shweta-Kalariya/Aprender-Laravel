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

                    <p><a href="/posts/create" class="btn btn-primary">Create Post</a></p>
                    <h3>Your Posts</h3>
                    @if(count($posts)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
