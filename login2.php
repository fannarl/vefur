<?php
	include "dbcon.php";
	$Uname = $_POST['Uname'];
	$password = $_POST['password'];
	$errorMessage = "";
	$sql = "SELECT Username, Password FROM users WHERE Username = '$Uname' AND Password = '$password'";
	$result = $pdo ->query($sql);
	$row = $result -> fetch();

	if($row > 0)
	{
		session_start();
		$_SESSION['login'] = "1";
		header("Location: index2.php");
	}
	else
	{
		$errorMessage ="Invalid Login";
		session_start();
		$_SESSION['login'] = ' ';
		include "index.html.php";
	}
?>