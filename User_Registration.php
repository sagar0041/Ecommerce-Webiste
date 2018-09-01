<?php require_once("project/scooter2/style.css"); 
?> 

	<!DOCTYPE html>
	<html>
	<head>
		<title>Register Now</title>
	</head>
	<link rel="stylesheet" type="text/css" href="project/scooter2/style.css">
	<body>
	<?php ?>
			<form action="User_Registration.php" method="post">
				<fieldset>
					Username:<br><input type="text" name="Username" value=""><br>

					Email:<br><input type="email" name="Email" value=""><br>

					Password:<br><input type="password" name="Password" value=""><br>

					Confirm Password:<br><input type="password" name="ConfirmPassword" value=""><br>

					<input type="Submit" name="Submit" value="Submit"><br>

				</fieldset>
			</form>
	</body>
	</html>