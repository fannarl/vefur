<?php
include "dbcon.php";
$Uname = $_POST['Uname'];
$password = $_POST['password'];
$Uname = htmlspecialchars($Uname);
$password = htmlspecialchars($password);
$errorMessage = "";
$sql = "SELECT Username, Password, Name, Phone, Email FROM users WHERE Username = '$Uname' AND Password = '$password'";
$result = $pdo ->query($sql);
$row = $result -> fetch();
$name = $row['Name'];
$email = $row['Email'];
$phone = $row['Phone'];
	
	if($row > 0)
	{
		session_start();
		$_SESSION['login'] = "1";
		$_SESSION['Username'] = $Uname;
		$_SESSION['Password'] = $password;
		$_SESSION['Name'] = $name;
		$_SESSION['Email'] = $email;
		$_SESSION['Phone'] = $phone;
		header("Location: index2.php");
	}
	else
	{
		$errorMessage ="Invalid Login";
		session_start();
		$_SESSION['login'] = '';
		header("Location: index.html.php");
	}
?>