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
    $b=$_SESSION['id'];

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>MAIN PAGE</title>
        <style>
            #l{
                padding: 20px;
                float: right;
            }
            .bbyt{
    text-align: center;
    font-size: 30px;
    padding: 20px;
    box-shadow: 2px 2px 2px 2px rgba(230, 36, 36, 0.884);
    background: black;
    opacity: 0.9;
    width: 300px;
    height:550px;
    border-radius: 30px;
    margin: 20px auto;
} 
ul{
    padding: 0px;
    margin: 0px;
}
ul li{
    list-style: none;
    border: 2px solid transparent;
    font-size: 15px;
    margin: 30px;
    border-radius: 15px;
    font-family: arial;
}  
ul li a{
    text-decoration: none;
    padding: 15px 35px;
    display: block;
    text-align: center;
    border-radius: 25px;
    transition: all 0.5s ease-in-out;
    color: whitesmoke;
    border: 2px solid rgb(255.30,50,0.5);

}
ul li:hover a{
    box-shadow: 0px 0px 10px rgb(255,255,255,0.5), 0px 0px 10px rgb(255,255,255,1);
    background-color: white;
}
.rr{
    width: 250px;
    height: 75px;
    text-align: center;
}
.rp{
    text-align: center;
}
.akg{
    float:left;
    padding: 10px;
    width: 90px;
    height: 100px;
    border-radius: 50%;
    animation-delay: 2s;
    animation-iteration-count: 1;
}
        </style>
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container-fluid">
        <div style="background-image: url('http://stockarch.com/files/13/08/vertical_wood_planks.jpg'); background-size: cover; padding: 10px;">
        <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
        <h2 class="rp text-white">Welcome <br><?php echo $a; ?> </h2>
    <div id="l">
    <a href="college1.php"><img src="https://bit.ly/37TS5eS" style="height:75px; border-radius:50%;"></a>
    </div>
    <div class="bbyt">
    <ul class="rr" style="text-align: center;">
                <li><a href="add_alumni.php">Add Alumni</a></li>
                <li><a href="search1.php">Search Alumni</a></li>
                <li><a href="verify.php">Verify Alumni</a></li>
                <li><a href="delete.php">Delete Registered Alumni</a></li>
                <li><a href="col_event.php">Event Information</a></li>
            </ul>
        </div>
</div>
</div>
<script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
    }

?>
