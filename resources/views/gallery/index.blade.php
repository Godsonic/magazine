@extends('layout.master')

@section('content')

	<h1>Image Gallery</h1>
	<hr>
	{{ Auth::user()->name }}
	
	@foreach($photos as $photo)
		
	
		<!--<img class="img-thumbnail" src="{{ asset('/images/'. $photo->thumbnail) }}" />-->
	
	@endforeach


@endsection
