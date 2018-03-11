<form  id="loginform" action="theinsert.php" method="post"><br> <!--This will need to be modified-->

Please log in to view the admin page.<br><br>

	Username:<br>
	<input type="text" name="username" id="username"><br>
	Password:<br>
	<input type="password" name="pwd" id="pwd"><br><br><!--// Pwd is hashed in settings.php, security flaw?-->
	<input type="submit" id="submit" value="Submit"><br><br>

</form>
