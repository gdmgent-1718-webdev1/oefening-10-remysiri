<?php 


	$isSubmitted = isset($_REQUEST['submit']);

	if ($isSubmitted)
	{
		echo $_POST['firstname'], PHP_EOL;
		echo $_POST['lastname'], PHP_EOL;
		echo $_POST['email'], PHP_EOL;
		echo $_POST['password'], PHP_EOL;
		echo $_POST['message'], PHP_EOL;
	}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 10</title>
</head>
<body>
	
	<form action="" method="POST">
		<label for="firstname">Voornaam</label>
		<input id="firstname" type="text" name="firstname">

		<label for="lastname">Familienaam</label>
		<input id="lastname" type="text" name="lastname">

		<label for="email">Email</label>
		<input id="email" type="email" name="email">

		<label for="password">Wachtwoord</label>
		<input id="password" type="password" name="password">

		<label for="message">Bericht</label>
		<textarea id="message" name="message"></textarea>


		<input type="submit" name="submit">
	</form>
</body>
</html>