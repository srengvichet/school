<html>
<head>
	<title>Email Confirmation</title>
</head>
<body>
	<h1>Action Required: Confirm Your Registrated Account</h1>
	<hr/>
	<h2>Hi {{ $user->name }},</h2>
	<div>
		You recently registered for School webportal. To complete your school account registration,
		<a href="{{ url('/user/confirmation',$user->token) }}">Please confirm account</a><br/>
	</div>
</body>
</html>

