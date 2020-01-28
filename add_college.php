<?php
session_start();
require "dbcon.php";

$cErr = "";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    if(isset($_POST['sub'])){
        $id=$_POST['c_id'];
        $name=$_POST['c_name'];
        $pass=$_POST['pass'];
        $cry=md5($pass);
        $sql="SELECT * from college where coll_id='$id' ";
        $rec=mysqli_query($db,$sql);
        if(!mysqli_num_rows($rec)){
            $sql1="INSERT INTO college VALUES ('$id','$name','$cry') ";
            $rec1=mysqli_query($db,$sql1);
            echo "SUCCESSFULLY ADDED";
        }
        else{
            $cErr="College id exists";
        }
    }

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>ADD COLLEGE</title>
        <link rel="stylesheet"  type="text/css" href="design.css">
        
        <style>   
        .btn{

padding: 10px 20px;
border: none;
outline: none;
font-family:"montserrat";
border-radius: 20px;
width: 90px;
margin-top:10px;
margin-left:10px;
background:#fb2525;
}
.btn:hover{
cursor: pointer;
background:lightgreen;
}

        </style>
    </head>
    <body>
         <a href="main2.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
        <div class="back">
            <p style="margin-bottom:30px;"><legend>COLLEGE DETAILS</legend></p>
        <form action="add_college.php" method="POST">
            <fieldset>
            
            <input type="text" name="c_name" placeholder="College Name" required><br>
            <input type="text" name="c_id" placeholder=" Unique College Id" required>
            <span color="red"><?php echo $cErr; ?></span><br>
            <input type="text" name="pass" placeholder="Password" required><br>
            <input type="submit" name="sub" value="SUBMIT"><br>
           
            </fieldset>
        </form>
</div>
    </body>
    </html>
<?php
    }

?>
