<?php
	session_start();

	require_once "/src/header.php";
	require_once "/src/mainmenu.php";
?>
	<form method="post" action="login_action.php">
	<fieldset>
	<legend>Login</legend>
	<p><label for="name">Username:</label> <input type="text" name="name" id="name" /></p>
	<p><label for="password">Password: </label> <input type="password" name="password" id="password" /></p>
	<p class="center"><input value="Login" type="submit" class="center" /></p>
	</fieldset>
	</form>

<?php 
	require_once "/src/footer.php";
?>