<?php
session_start();
require "dbcon.php";

if(isset($_POST['login'])){

    $a=$_POST['user'];
    $b=$_POST['password'];
    $c=md5($b);

    $sql=" SELECT * FROM college where coll_id = '$a' and pass = '$c' ";
    $r=mysqli_query($db,$sql);
   
    if(mysqli_num_rows($r)){
        $res=mysqli_fetch_array($r);

        $_SESSION['user']=$res['coll_name'];
        $_SESSION['id']=$a;
        header("location: main3.php");
    }
    else{
        echo"<script> alert('INCORRECT CREDENTIALS') </script>";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
        
        <style>
            
#ryt{
    float: right;
}
.akg{
    float:left;
    width: 90px;
    height: 100px;
    border-radius: 50%;
    animation-delay: 2s;
    animation-iteration-count: 1;
}
#back{
    top:30%;
    left: 30%;
    position:absolute;
    text-align: center;
    font-size: 20px;
    padding: 30px;
    box-shadow: 2px 2px 2px 2px rgba(230, 36, 36, 0.884);
    background: rgb(152, 208, 240);
    width: 500px;
    height:300px;
    border-radius: 30px;
    margin: 20px auto;
}   
#c{
    text-align:center;
}
#login{
    padding-top: 11%;
    border-radius: 40px;
    text-align: center;
    float: left;
    box-shadow: 2px 2px 3px 5px white;
    background: rgb(240, 148, 11);
    width: 400px;
    height:400px;;
    margin: 20px auto;
}
body{
    background-image: url("https://image.shutterstock.com/image-vector/abstract-polygonal-design-gray-gradient-260nw-1200902623.jpg");
    background-size: cover;
}
input{
    padding:8px;
    font-size: inherit;
}
input[type="text"],[type="password"]{
    display: inline-block;
    margin: 5px 0 22px 0;
    margin:2px;
    width:50%;
    border: 1px solid black;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: rgb(15, 230, 238);
    outline: none;
  }
  
input[type=submit],button{
    border-radius: 5px;;
    width: 150px;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    opacity: 0.9;
}
input[type=button],button{
    border-radius: 5px;;
    width: 150px;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    opacity: 0.9;
}

        </style>
        <link rel="stylesheet" href="css/animate.css">
        <script>
            function myFunction() {
              var x = document.getElementById("pass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>
    </head>
    <body>
            <div id='c'>
        <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
        <h1 class="he text-white text-center pb-3">College Login<h1>
        </div>
        <div id="back">
                <form action="college1.php" method="POST">
                    <b>REGISTERED ID</b><br>
                    <input type="text" name="user" placeholder="Registered College Id" required><br><br>
                    <b>PASSWORD</b><br>
                    <input type="password" name="password" placeholder="Password" id="pass" required><br>
                    <input type="checkbox" onclick="myFunction()" style="margin-bottom:15px">Show Password<br><br>
                    <input type="submit" name="login" value="LOGIN">
                    <input type="button" value="BACK" onclick="window.location.href='login.html' ;" >
                </form>
        </div>
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>