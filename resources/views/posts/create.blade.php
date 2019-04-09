@extends('layout.app')

@section('content')
<h2>Create</h2>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class='form-group'>
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'Enter title'])}}
    </div>
	<div class='form-group'>
        {{Form::label('body', 'Body')}}
        {{-- {{Form::text('body', '', ['id' => 'summary-ckeditor', 'class'=>'form-control', 'placeholder' => 'Enter Body'])}} --}}
        {{Form::text('body', '', ['class'=>'form-control', 'placeholder' => 'Enter Body'])}}
    </div>
    <div class='form-group'>
        {{Form::file('cover_image')}}
    </div>
	<div class='form-group'>
        {{Form::submit('Submit', ['class'=>'form-control btn btn-default'])}}
    </div>
{!! Form::close() !!}
@endsection