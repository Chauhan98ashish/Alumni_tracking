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
		$bg = $_POST["msgbox"];
$txt = $_POST["txt-color"];
session_start();
$uname = $_SESSION["user"];

	$sql = mysqli_query($db,"UPDATE colortb SET colorbg = '$bg', colortxt = '$txt' WHERE username = '$uname' ");

	if($sql)
	{
		header("Location: home.php");
	}
}
}	
?>