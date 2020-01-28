<?php
require "dbcon.php";
session_start();
if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE..Wait until you are not verified ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{

	if($_SESSION['v']==0){
	echo "Wait until you are not verified ";
    echo "<br>GO BACK : <a href='main.php'>BACK</a>";
	}
	else{
	$msg = $_POST["txtarea"];
	$userid = $_SESSION["user"];
	date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-Y H:i');

$send = mysqli_query($db, "INSERT INTO chattb VALUES ('','$userid','$msg','$date') ");

if($send)
{
	header("Location: home.php");
}
	}
}
?>