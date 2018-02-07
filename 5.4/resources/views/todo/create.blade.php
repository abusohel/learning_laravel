@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Create new item</h1>
		
	<form class="form-horizontal" action="/todo" method="post">
		{{csrf_field()}}
       <div class="form-group">      
       <textarea class="form-control" name="body" id="exampleTextarea" rows="5"></textarea>
       <br>
       <button type="submit" class="btn btn-success">Submit</button>
      </div>    
	</form>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			{{$error}}
			@endforeach
			</div>
		@endif
	</div>
@endsection