@extends('layout.master')

@section('content')

	<h1>Photo Gallery</h1>
	<p><strong>{{ $username  = Auth::user()->name }} Photo Album</strong></p>
	<hr>

	
	@foreach($images as $image)
		
		<ul class="list-group">
			
			<li>
				<a href="photo/{{$image->id}}"><img class="img-thumbnail" src="{{ asset('/images/'. $username.'/'.$image->thumbnail) }}" alt="{{$image->title}}"/></a>
			</li>
			
		</ul>
		
		
		
	
	@endforeach


@endsection
