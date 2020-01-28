<?php

session_start();
require "dbcon.php";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    if(isset($_POST['subm'])){
    $r=$_SESSION['r'];
    $u=$_SESSION['user'];
    $v=$_SESSION['x'];
    $a=$_POST['name'];
    $b=$_POST['mob'];
    $c=$_POST['email'];
    $d=$_POST['work'];
    $e=$_POST['about'];

   if($v==1){
       if($d=='select'){
           echo "<script> alert('Please select first') </script>";
           header("Refresh:0.05;url=editprofile.php");
       }
       else{
        mysqli_query($db,"UPDATE alumni set name='$a',mobile='$b',email='$c',stat2='$d',des='$e' where alumni_id='$u' ");
        echo "<script> alert('Updated Successfully') </script>";
        header("Refresh:0.05;url=editprofile.php");
       }
   }
   else{
       $f=$_POST['college'];
       $g=$_POST['rno'];
       $h=$_POST['year'];
       if($d=='select'||$f=='select'||$h=='select'){
        echo "<script> alert('Please select first') </script>";
        header("Refresh:0.05;url=editprofile.php");
       }
       else{
           $sql="SELECT * from alumni where rno='$g'and '$g'!='$r' ";
           $rec=mysqli_query($db,$sql);
           if(mysqli_num_rows($rec)==0){
        mysqli_query($db,"UPDATE alumni set name='$a',mobile='$b',email='$c',stat2='$d',des='$e',rno='$g',year='$h',college='$f' where alumni_id='$u' ");
        echo "<script> alert('Updated Successfully') </script>";
        header("Refresh:0.05;url=editprofile.php");
           }
           else{
            echo "<script> alert('Roll number exists!!Please Check..') </script>";
            header("Refresh:0.05;url=editprofile.php");
           }
       }
   }
}     
}
?>