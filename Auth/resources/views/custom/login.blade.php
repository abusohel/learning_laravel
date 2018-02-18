<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 com-lg-6">
		
				<form action="{{route('custom.login')}}" class="form-horizontal" method="post">
					{{csrf_field()}}
					<fieldset>
						<legend>Login</legend>


						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Email</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="inputEmail" name="email" value="{{old('email')}}" placeholder="Email">
							</div>
						</div>


						<div class="form-group">
							<label for="inputPassword" class="col-lg-4 control-label">Password</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="inputPassword" name="password" placeholder="password">
							</div>
						</div>

					

						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-4">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</div>

	<script
			  src="http://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>