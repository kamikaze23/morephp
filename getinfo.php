<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['usrname']) && isset($_POST['pswd'])){
		echo "Your username is ".$_POST['usrname']."<br>Your password is: ".$_POST['pswd'];
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// mysql connect function here
	// mysql query here
	$sql = "SELECT * FROM user_accounts WHERE username = '$username' and password = '$password'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	if($count == 1) {
		session_register(username);
		session_register(password);
		header('location: index.php');
	}
	else {
		$error = "Invalid Username or Password Please Try Again";
	}
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?=$error=?>
Username : <input type="text" name="username">
Password : <input type="password" name="password">
<input type="submit" />
</form>
