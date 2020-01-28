<?php

require "dbcon.php";
$rErr="";
if(isset($_POST['sub'])){
    

    $r=$_POST['rno'];
    $email=$_POST['email'];

    $sql2="SELECT * from alumni where rno='$r' ";
    $rec2=mysqli_query($db,$sql2);
    if(mysqli_num_rows($rec2)==0){
        $rErr="NOT Registerd yet or incorrect roll number";
    }

     else{
    $sql="SELECT * from alumni where rno='$r' and pass_rec != 'NULL' ";
    $rec=mysqli_query($db,$sql);

    if(mysqli_num_rows($rec)>0){
        $sql1="UPDATE alumni set email='$email' where rno='$r' ";
        $rec1=mysqli_query($db,$sql1);
        echo "<script> alert('EMAIL UPDATED SUCCESSFULLY') </script>";
        header("Refresh: 0.05; url= alumni1.php");
    }
    else{
        echo "<script> alert('You don't have access do it') </script>";
            header("Refresh: 0.05; url= alumni1.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset Email</title>
        <style>
            .mid{
                text-align: center;
            }
            body{
        background-image:url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-01.jpg");
    }
    h2{
        text-align:center;
        margin:0;
    }
    form{
        margin-top:40px;
    }
  .btn{
   padding: 10px 20px;
   margin-top:10px;
   margin-left:10px;
   font-size:18px;
   text-decoration:underline;
   border: none;
   outline: none;
   color:white;
   border-radius: 20px;
   width: 90px;
   background:#fb2525;
   }
  .btn:hover{
   cursor: pointer;
   background:green;
  }
  .back{
    width:420px;
    height:500px;
    background:white;
    color:#000;
    top:50%;
    left: 50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius:30px;
}
.back b{
    margin:0;
    padding: 0;
    font-weight:bold;
    font-size:18px;
}
.back input{
    width:100%;
    margin-bottom: 20px;
}
.back input[type="text"],input[type="email"]{
    border:none;
    border-bottom:1px solid rgb(189, 176, 176);
    background:transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.back input[type="submit"]{
    border: none;
    outline:none;
    height:40px;
    background: #fb2525;
    color:#fff;
    font-size: 20px;
    border-radius: 20px;
}
.back input[type="submit"]:hover{
    cursor: pointer;
    background: lightgreen;
    color: #000;
}


        </style>
    </head>
    <body>
    <a href="forgot.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
       <div class="back">
            <h2>RESET EMAIL</h2>
            <form action="email.php" method="POST">
                <b>ROLL NUMBER</b>
                <input type="text" name="rno" placeholder="registered roll number" required>
                <span color="red" ><?php echo $rErr; ?></span><br><br>
                <b>NEW EMAIL</b>
                <input type="email" name="email" placeholder="new email" required><br><br>
                <input type="submit" name="sub" value="Submit">
            </form>
       </div>
    </body>
</html>

