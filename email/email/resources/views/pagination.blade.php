<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagination</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="container">
			<table border="2">
				<thead>
					<th>No.</th>
					<th>Name</th>
					<th>Email</th>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
			{{$users->links()}}
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>