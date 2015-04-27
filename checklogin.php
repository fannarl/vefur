

<?php
include "dbcon.php";
$Uname = $_POST['Uname'];
$password = $_POST['password'];
$sql = "SELECT Username, Password FROM users WHERE Username = '$Uname' AND Password = '$password'";
$result = $pdo ->query($sql);
$row = $result -> fetch();

if($row > 0)
{
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$result = $pdo ->query($sql);
	$sql = "SELECT Name, Email 
			FROM users ";
	$row = $result -> fetch();


	$q = $pdo->prepare($sql);
	try{
		echo '<a href="mbl.is"></a>'
	}
	catch (Exception $ex) {
		echo "Innskráning tókst ekki".$ex->getMessage();
	}
}
else
{
	echo"Notendanafn eða símanúmer er rangt, reyndu aftur";
}
?>