<?php
session_start();
require "dbcon.php";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    $a=$_SESSION['user'];
    if($_POST['check']){
        $x=$_POST['check'];
        $_SESSION['alumni']=$x;
        $sql1="SELECT * FROM col_alumni where rno='$x' and col_name='$a'";
        $rec1=mysqli_query($db,$sql1);
        
        if(mysqli_num_rows($rec1)){
         $sql2="UPDATE alumni set verified='1' where rno='$x'";
         $rec2=mysqli_query($db,$sql2);
         echo "<script> alert('VERIFIED SUCCESSFULLY!!') </script>";
         header("Refresh:0.05; url= 'verify2.php' ");
        }
        else{
            echo "<script> alert('NOT VERIFIED!! Please check it out..') </script>";
            $sql2="UPDATE alumni set verified=now() where rno='$x'";
            $rec2=mysqli_query($db,$sql2);
            header("Refresh:0.05; url= 'verify3.php' ");
        }
    }
}
    ?>