@extends('layout.app')

@section('body')
	<br>
	<a href="todo/create" class="btn btn-info btn-group-sm">Add New</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>Todo Lists</h1></center>
		<ul class="list-group">
		<li class="list-group-item">
			This is my 1st item
		</li>
		</ul>
	</div>
@endsection