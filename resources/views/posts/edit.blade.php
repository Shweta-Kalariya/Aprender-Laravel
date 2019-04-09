@extends('layout.app');
@section('content')
    <h2>Edit</h2>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder' => 'Enter title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{-- {{Form::text('body', $p->body, ['id' => 'summary-ckeditor', 'class'=>'form-control', 'placeholder' => 'Enter Body'])}} --}}
            {{Form::text('body', $post->body, ['class'=>'form-control', 'placeholder' => 'Enter Body'])}}
        </div>
        <div class='form-group'>
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'form-control btn btn-default'])}}
    {!! Form::close() !!}
@endsection