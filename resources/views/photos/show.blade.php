@extends('layout.master')

@section('content')

	<h2>{{ $image->title}}</h2> <a href="/photo">Photo Album</a>
	<hr>
		<p hidden>{{ $username  = Auth::user()->name }} </p>
	
		<img class="img-thumbnail" src="{{ asset('/images/'. $username.'/'.$image->fileName) }}" alt="{{$image->title}}"/>


@endsection
