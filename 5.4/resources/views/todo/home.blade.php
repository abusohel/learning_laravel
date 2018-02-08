@extends('layout.app')

@section('body')
	<br>
	@include('todo.partials.message')
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h1>Todo Lists</h1></center>
		<ul class="list-group col-lg-8">
			@foreach($todos as $todo)
			
		<li class="list-group-item">
			<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
			<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
		</li>
		@endforeach
		</ul>
		
		<ul class="list-group col-lg-2">
			@foreach($todos as $todo)
			
		<li class="list-group-item">
			<center><a href="{{'/todo/'.$todo->id.'/edit'}}"><i class="fa fa-pencil-square-o">Edit</i></a></center>
		</li>
		@endforeach
		</ul>


	</div>
@endsection
