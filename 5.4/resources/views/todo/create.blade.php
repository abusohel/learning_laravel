@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>{{substr(Route::currentRouteName(),5)}} item</h1>
		
	<form class="form-horizontal" action="/todo/@yield('editId')" method="post">
		{{csrf_field()}}

		@section('editMethod')
			@show

		<div class="form-group">      
       
       <input type="text" class="form-control" name="title" value="@yield('editTitle')" placeholder="Title">
       <br>
       
      </div> 
       <div class="form-group">      
       <textarea class="form-control" name="body" id="exampleTextarea" rows="5" placeholder="Body">@yield('editBody')</textarea>
       <br>
       <button type="submit" class="btn btn-success">Submit</button>
      </div>    
	</form>
	@include('todo.partials.errors')
	</div>
@endsection