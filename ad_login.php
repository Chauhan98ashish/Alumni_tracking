<?php
session_start();
require "dbcon.php";
if(isset($_POST['login'])){
    $a=$_POST['user'];
    $b=$_POST['password'];
    $c=md5($b);
    $sql="SELECT * FROM alumni where alumni_id='$a'";
    $rec=mysqli_query($db,$sql);
    if(mysqli_num_rows($rec)){
        $sql1="SELECT * FROM alumni where alumni_id='$a'and password='$c'";
        $rec1=mysqli_query($db,$sql1);
       
        if(mysqli_num_rows($rec1)){
        $_SESSION['user']=$a;
        header("location: main.php");
        }
        else{
        echo"<script> alert('INCORRECT PASSWORD..') </script>";
        header("Refresh:0.5; url=alumni1.php");
        }
    }
    else{
        echo"<script> alert('User id not exists') </script>"; 
        header("Refresh:0.5; url=alumni1.php");  
    }
}
?>