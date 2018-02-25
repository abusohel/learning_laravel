<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="rox">
			<br>
			<form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
				{{csrf_field()}}
				<input type="file" name="file"> <br>
				<input type="submit" value="submit" class="btn btn-info">
			</form>
		</div>
	</div>
</body>
</html>