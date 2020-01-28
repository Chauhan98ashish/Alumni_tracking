<?php

session_start();
require "dbcon.php";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Proflie</title>
<style>
    #p{
        text-align: center;
        background-color: rgb(50,200,50);
        border-radius: 3%;
        opacity: 0.8;
        width: 760px;
        height: auto;
        padding-top: 2%;
    }
    img{
        padding: 30px;
        float: right;
        height: 75px;
        border-radius:50%;
    }
    .gh{
        background-image: url("https://www.itl.cat/pngfile/big/157-1572257_professional-website-background-images-hd-professional-emails-background.jpg");
        background-size: cover;
        width: 100%;
        height: auto;
    }
    .er{
    float: right;
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
.akg{
    float:left;
    padding: 20px;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    animation-delay: 2s;
    animation-iteration-count: 1;
}
.jh{
    position: absolute;
    left: 55%;
    top: 0%;
}
.ii{
    padding-top: 10px;
    text-align: center;
}
.nn{
    position: center;
    padding-left: 25%; 
}
</style>
<link rel="stylesheet" href="css/animate.css">
</head>
<body>
    <div class="gh">
    <div class="er">
                <input type="button" value="BACK" onclick="window.location.href='main.php' ;" >
                    </div>
                    <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
   <div class="jh">
   <?php
    $a=$_SESSION['user'];
    $res=mysqli_query($db,"SELECT * from alumni where alumni_id='$a' ");
    if(mysqli_num_rows($res)){
        $rec=mysqli_fetch_array($res);
         echo "<br>";
         if($rec['verified']=='1'){
            echo "<img src='https://bit.ly/378CwAb'>";
        }
        else{
            echo "<img src='https://bit.ly/38flBvQ'>";
        }
    ?>
    </div>
    <div class="ii">
    <h1 align='center'>PROFILE</h1>
    <br><br><br>
    <div class="nn">
    <div id='p'>
        <h3>NAME: <?php echo $rec['name']; ?> </h3><br>
        <h3>USER ID: <?php echo $rec['alumni_id']; ?> </h3><br>
        <h3>ROLL NUMBER: <?php echo $rec['rno']; ?> </h3><br>
        <h3>CONTACT: <?php echo $rec['mobile']; ?> </h3><br>
        <h3>EMAIL: <?php echo $rec['email']; ?> </h3><br>
        <h3>ADDRESS: <?php echo $rec['address']; ?> </h3><br>
        <h3>DOB: <?php echo $rec['dob']; ?> </h3><br>
        <h3>MARITIAL STATUS: <?php echo $rec['stat1']; ?> </h3><br>
        <h3>SEX: <?php echo $rec['sex']; ?> </h3><br>
        <h3>COLLEGE: <?php echo $rec['college']; ?> </h3><br>
        <h3>PASSING YEAR: <?php echo $rec['year']; ?> </h3><br>
        <h3>WORK STATUS: <?php echo $rec['stat2']; ?> </h3><br>
        <h3>DESCRIPTION: <?php echo $rec['des']; ?> </h3><br>
    </div>    
    </div>
    </div>
    <?php  
        }
    }
    
    ?>
</div>
<script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
</body>
</html>

