<!DOCTYPE HTML>

<html>
	<head>

		<title>Register Customer Account</title>
	</head>
	<body>
	<h3>Register Customer Account</h3>

  <form  id="addpuzzleform" action="cregistercustomer.php" method="post"><br>

  <p>Hello. Please enter your information below.</p><br>

  	<p>Name:<br>
  	<input type="text" name="name" id="name" required><br></p>
  	<p>Username:<br>
  	<input type="text" name="username" id="username" required><br></p>
  	<p>Password:<br>
  	<input type="password" name="password" id="password" required><br></p>
  	<p>Address:<br>
  	<input type="text" name="address" id="address" required><br></p>
  	<p>Phone: (In the form xxxxxxxxxx)<br>
  	<input type="number" name="phone" id="phone" required><br></p>
    <p>Email:<br>
  	<input type="email" name="email" id="email" required><br><br></p>

    <input type="submit" id="submit" value="Submit"><br><br>

	  </form>

	</body>
</html>
