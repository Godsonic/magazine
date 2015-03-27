@extends('layout.master')

@section('content')

	<h1>Image Upload</h1>
	<hr />
	
	{!! Form::open(['route'=>'picture.store', 'files'=>true]) !!}
	
	<div class="form-group">

    {!! Form::label('title', 'Title :') !!}
    {!! Form::text('title', null, ['class' =>'form-control']) !!}

	</div>
	<div class="form-group">

    {!! Form::file('thumbnail') !!}

	</div>
	
	<div class="form-group">

    {!! Form::submit('upload',['class' =>'btn btn-primary']) !!}

	</div>



	
	{!! Form::close() !!}

@endsection
