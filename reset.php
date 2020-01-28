<?php
session_start();
require "dbcon.php";

if((!empty($_GET['code']) && isset($_GET['code']))|| isset($_POST['sub'] )){
    $temp=0;
    $passErr = $cpassErr = "";
    $pass = $cpass = $cry = "";

    if(!empty($_GET['code']) && isset($_GET['code'])){
    $code=$_GET['code'];
    $_SESSION['c']=$code;
    }
    if(isset($_POST['sub'] )){
        $code=$_SESSION['c'];
    }
    $sql="SELECT * from alumni where pass_rec='$code' ";
    $rec=mysqli_query($db,$sql);
    $num=mysqli_fetch_array($rec);
    if($num>0){

        if(isset($_POST['sub']) ){
             if (!preg_match("/^[a-zA-Z0-9@#$]*$/",$_POST['password']) || strlen($_POST['password'])<8) {
                $passErr = "Only small and capital alphabets, digits,(@,#,$) and minimum 8 characters allowed";
                $temp=1;
              }
              else{
                $pass=$_POST['password'];
                $cry=md5($pass);
              }

            if($_POST['cpass']!=$_POST['password']){
                $cpassErr = "It must be same as above password provided";
                $temp=1;
            }
            else{
                $cpass=$_POST['cpass'];
            }

            if($temp==0){
           $r=$num['rno'];
            $sql1="UPDATE alumni set password='$cry', pass_rec = 'NULL' where rno='$r' ";
            $rec1=mysqli_query($db,$sql1);
            if($rec1){
                echo "<script> alert('Password reset successfully') </script>";
               header("Refresh:0.05; url='alumni1.php'");
            }
        }
        }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password</title>
        <style>
            .mid{
                text-align: center;
            }
        </style>
    </head>
    <body>
       <div class="mid">
            <h2>RESET PASSWORD</h2>
            <form action="reset.php" method="POST">
                <b>New password</b>
                <input type="password" name="password" placeholder="password" required>
                <span color="red" ><?php echo $passErr; ?></span><br><br>
                <b>Confirm password</b>
                <input type="password" name="cpass" placeholder="same password as written above" required>
                <span color="red" ><?php echo $cpassErr; ?></span><br><br>
                <input type="submit" name="sub" value="Submit">
            </form>
       </div>
    </body>
</html>
        
    <?php
    }
    else{
        echo "This link has been expired..";
    }
        }
else{
    echo "You have no permission to open it";
}
?>