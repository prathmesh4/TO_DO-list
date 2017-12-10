@extends('layout.app')

@section('body')
	<div class="col-lg-offset-4 col-lg-4">
		<br>
		<h1>{{$item->title}}</h1>
		<p>{{$item->body}}</p>
	</div>
@endsection