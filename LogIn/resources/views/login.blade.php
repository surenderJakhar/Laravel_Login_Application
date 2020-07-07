<!DOCTYPE html>
<html>
<head>
	<title>Login System in Laravel</title>
</head>
<body>
	<br/>
	<center>
		<div class="container box">
			<h3>Login System in Laravel</h3><br/>
			<form action="/loginme" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label>Username/email</label>
					<input type="email" name="email" class="form-control" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="Password" class="form-control" />
				</div>
				<div class="form-group">
					<input type="submit" name="login" class="btnbtn-primary" value="Login" />
				</div>

			</form>
		</div>
	</center>
</body>
</html>