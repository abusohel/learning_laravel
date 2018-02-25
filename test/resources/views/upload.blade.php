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
				<input type="file" name="file[]" multiple> <br>
				<input type="submit" value="submit" class="btn btn-info">
			</form>
		</div>
		<div class="row">
			<img src="{{ asset('storage/upload/11174885_876324232429783_7811506296448584753_n.jpg') }}" alt="">
		</div>
	</div>
</body>
</html>