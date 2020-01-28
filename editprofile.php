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
<title>EDIT PROFILE</title>
<style>
    #c{
        text-align: center;
    }
    img{
        padding: 30px;
        float: right;
        height: 75px;
        border-radius:50%;
    }
    .er{
    float: right;
}
    input[type=button],button{
    border-radius: 5px;
    width: 150px;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    opacity: 0.9;
}
input[type=submit],button{
    border-radius: 5px;
    width: 80px;
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
.bv{
    background-image: url("http://eskipaper.com/images/light-blue-wallpaper-22.jpg");
    background-size: cover;
    width: 100%;
    height: 130vh;
}
.kk{
    position: absolute;
    top: 20%;
    left: 30%;
    background: white;
    opacity: 0.8;
    width: 600px;
    height: auto;
    border-radius: 10%;
}
</style>
<link rel="stylesheet" href="css/animate.css">
</head>
<body>
    <div class="bv">
<div class="er">
                <input type="button" value="BACK" onclick="window.location.href='main.php' ;" >
                    </div>
                    <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
    <div class="kk">
    <?php
    $a=$_SESSION['user'];
    $res=mysqli_query($db,"SELECT * from alumni where alumni_id='$a' ");
    if(mysqli_num_rows($res)){
        $rec=mysqli_fetch_array($res);
        $_SESSION['x']=$rec['verified'];
        $_SESSION['r']=$rec['rno'];
         echo "<br><br>";
    ?>
        <h2 align='center'> <?php echo $a.' Edit Profile Here'; ?></h2>
        <div id="c">
         <form action='editprofile1.php' method="POST">
    <?php
         if($rec['verified']!='1'){
            
    ?>        
        <b>COLLEGE:</b><br>
        <select name="college">
             <option value='select'>---SELECT---</option>
            <?php
                 $query="SELECT coll_name FROM college order by coll_name";
                 $result=mysqli_query($db,$query);
                 while ($row=mysqli_fetch_array($result)){
                 $coll=$row['coll_name'];
                 echo "<option value='".$coll."'>".$coll."</option>";
                 }
            ?>
         </select><br><br>
        <b>ROLL NUMBER:</b><br>
        <input type="text" name='rno' value= "<?php echo $rec['rno']; ?>" ><br><br>
        <b>Passing year:</b><br>
            <select name="year">
                <option value="select">--SELECT--</option>
                <script>
                var myDate = new Date();
                var year = myDate.getFullYear();
                for(var i = 2001; i < year+1; i++){
	               document.write('<option value="'+i+'">'+i+'</option>');
                 }
                </script>
            </select><br><br>
    <?php
         }
    ?>

        <b>NAME:</b><br>
        <input type="text" name="name" value="<?php echo $rec['name']; ?>"><br><br><br>
        <b>CONTACT:</b><br>
        <input type="text" name="mob" value="<?php echo $rec['mobile']; ?>"><br><br><br>
        <b>EMAIL:</b><br>
        <input type="email" name="email" value="<?php echo $rec['email']; ?>"><br><br><br>
        <b>Present Work Status:</b><br>
            <select name="work">
                <option value="select">--SELECT--</option>
                <option value="Studies">Higher Studies</option>
                <option value="Startup">Start up</option>
                <option value="Job">Job</option>
            </select><br><br><br>
        <b>Description of work status:</b><br>
        <textarea name="about"><?php echo $rec['des']; ?></textarea><br><br>
         <br><input type="submit" value="SAVE" name="subm">
        </form>
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

