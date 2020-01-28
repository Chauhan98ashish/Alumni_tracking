<?php
session_start();
require "dbcon.php";

$err='';
if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{

if(isset($_POST['add']))
{
    $a=$_POST['from']; 
    $c=$_POST['id'];
    $d=$_POST['sub'];
    $e=$_POST['details'];
    $b=$_SESSION['user'];

    $res=mysqli_query($db,"select * from col_event where id='$c' ");
   
    if(mysqli_num_rows($res)){
        $err="<font color='red'>Event Id exists..Please check first</font>";
    }
   else{
    if(DATE('Y-m-d')<$a){
        mysqli_query($db,"insert into col_event values ('$c','$a','$d','$e','$b')");
        $err="<font color='green'>Event added Successfully</font>";
    }
    else{
     $err="<font color='red'>Check Event date...It must held in future.</font>";
    }
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
<title>EVENT</title>
<style>
body{
	background-image: url("http://sweetbeginningslv.com/wp-content/uploads/2015/04/abstract-design-wallpaper-colorful-background-wallpapers-website.jpg");
}
.reg label{
        display: block;
        margin: 4px;
        text-align: left;
    
	}
	.h2{
		text-align:center;
	}
	.fm{
		width:350px;
		box-shadow:0 0 3px rgba(0,0,0,0.3);
		background:black;
        padding:20px;
        opacity: 0.9;
		margin:8% auto 0;
		text-align:center;
        border-radius: 4%;
	}
    .akg{
    float:left;
    padding: 10px;
    width: 130px;
    height: 120px;
    border-radius: 50%;
    animation-delay: 2s;
    animation-iteration-count: 1;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
</head>
<body>
    <div class="pr-5 pt-0">
<a href="main3.php" class="btn btn-success float-right">Back</a>
</div>
<a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
	<div class="fm">
    <h2 class="text-white">Add new Event</h2>

    <form method="POST" action="col_event.php">
    <?php echo $err; ?>
    <div class="reg">
        <label class="text-white">Select Date</label>
         <input type="date" name="from" placeholder=' Date' required>
         <pre class="text-white">On this date event is held</pre><br>
    </div>
    <div class="reg">
		<label class="text-white">Enter Event Id</label>
		<input type="text" name="id" placeholder="Event id" required>
	</div>
    <div class="reg">
		<label class="text-white">Enter Subject</label>
		<input type="text" name="sub" placeholder="Title" required>
	</div>
    <div class="reg">
		<label class="text-white">Enter Details</label>
		<textarea name="details"  placeholder="Detailed information of event" required></textarea>
	</div><br>
    <div class=" reg">
        <input type="submit" value="Add New Event" name="add" class="btn btn-success"/><br><br>
	</div>
    <a href="event.php" class="btn btn-warning text-dark">Reset</a><br><br>
    </form>

    <form action="c_event2.php" method="POST">
    <div class=" reg">
        <input type="submit" value="DELETE EVENT" name="del" class="btn btn-success"/><br><br>
    </div>
    <div class=" reg">
        <input type="submit" value="SEE EVENTS DETAIL" name="see" class="btn btn-success"/><br><br>
	</div>
    </form>   
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
