@extends('layout.master')
@section('content')

	<h2>TODO <small>What To Do ?</small></h2><hr>
	
	<div ng-app="">
 		<p>Name: <input type="text" ng-model="name"></p>
 		<p ng-bind="name"></p>
	</div>

@endsection
