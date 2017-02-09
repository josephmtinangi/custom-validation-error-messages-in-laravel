<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css">
	<style>
		body {
			padding-top: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				@if(session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				<form action="{{ url('contact') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" value="{{ old('name') }}">
						<small class="text-danger">{{ $errors->first('name') }}</small>
					</div>
					<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" value="{{ old('email') }}">
						<small class="text-danger">{{ $errors->first('email') }}</small>
					</div>
					<div class="form-group{{ $errors->has('message') ? 'has-error' : '' }}">
						<label for="message">Message</label>
						<textarea name="mesage" rows="10" class="form-control">{{ old('message') }}</textarea>
						<small class="text-danger">{{ $errors->first('message') }}</small>
					</div>											
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>