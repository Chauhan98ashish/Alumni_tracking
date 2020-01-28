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

    $res=mysqli_query($db,"select * from event where id='$c' ");
   
    if(mysqli_num_rows($res)){
        $err="<font color='red'>Event Id exists..Please check first</font>";
    }
   else{
        mysqli_query($db,"insert into event values ('$a','$c','$d','$e',now())");
        $err="<font color='green'>Notice added Successfully</font>";
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Notice</title>
<style>
body{

	background:-webkit-linear-gradient(left,red,yellow);
}
.reg label{
    margin:0;
    padding: 0;
    font-weight:bold;
    display:block;
    text-align:left;
    font-size:20px;
}
.reg input,textarea{
    width:100%;
    margin-bottom: 15px;
}
.reg input[type="text"], input[type="password"]{
    border:none;
    border-bottom:1px solid rgb(189, 176, 176);
    background:transparent;
    outline: none;
    height: 35px;
    color: #fff;
    font-size: 14spx;
}
.reg input[type="submit"]{
    border: none;
    outline:none;
    height:35px;
    background: #fb2525;
    color:#fff;
    width:200px;
    font-size: 15px;
    border-radius: 20px;
}
.reg input[type="submit"]:hover{
    cursor: pointer;
    background: lightgreen;
    color: #000;
}
	.h2{
		text-align:center;
	}
	.fm{
		max-width:400px;
		background:#fff;
		padding:12px;
        margin: auto;
        margin-top:-30px;
        text-align:center;
        height:680px;
        border-radius:25px;
    }
    .bt{

padding: 10px 20px;
border: none;
outline: none;
font-family:"montserrat";
border-radius: 20px;
width: 90px;
margin-top:10px;
margin-left:10px;
background:green;
}
.bt:hover{
cursor: pointer;
background:blue;
}


    button{

padding: 10px 20px;
border: none;
outline: none;
background:#fb2525;
color:#fff;
font-size:15px;
border-radius: 20px;
width: 200px;
}
button:hover{
cursor: pointer;
background:lightgreen;
}
	
</style>

</head>
<body>
<a href="main2.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="bt">Back</a></button>
	<div class="fm">
    <h2>Add new Event</h2>

    <form method="POST" action="event.php">
    <?php echo $err; ?>
    <div class="reg">
        <label>Select Date</label>
         <input type="date" name="from" placeholder=' Date' required>
         <pre color="red">On this date event is held</pre><br>
    </div>
    <div class="reg">
		<label>Enter Event Id</label>
		<input type="text" name="id" placeholder="Event id" required>
	</div>
    <div class="reg">
		<label>Enter Subject</label>
		<input type="text" name="sub" placeholder="Title" required>
	</div>
    <div class="reg">
		<label>Enter Details</label>
		<textarea name="details"  placeholder="Detailed information of notice" required></textarea>
	</div><br>
    <div class=" reg">
        <input type="submit" value="Add New Event" name="add" class="btn btn-success"/><br><br>
	</div>
    <button onclick="window.location.href='event.php'" class="btn">RESET</button><br><br>
</form>
    <form action="c_event.php" method="POST">
        <div class="reg">
        <input type="submit" value="DELETE EVENT" name="del" class="btn btn-success"/><br><br>
    </div>
        <div class="reg">
         <input type="submit" value="SEE EVENTS DETAIL" name="see" class="btn btn-success"/><br><br>
	</div>
    
</form> 
    </div>
</body>
</html>
<?php
}
?>
