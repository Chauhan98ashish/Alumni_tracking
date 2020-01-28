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
    $b=$_POST['to'];
    $c=$_POST['id'];
    $d=$_POST['sub'];
    $e=$_POST['details'];

    $res=mysqli_query($db,"select * from notice where id='$c' ");
   
    if(mysqli_num_rows($res)){
        $err="<font color='red'>Notice Id exists..Please check first</font>";
    }
   else{
        mysqli_query($db,"insert into notice values ('$a','$b','$c','$d','$e',now())");
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
    height:100%;
    width:100%;
    margin:0;
    padding:0;
    overflow:hidden;
    animation:color 15s ease infinite;
}
@keyframes color{
    0%{
        background:yellow;
    }
    25%{
        background:skyblue;
    }
    75%{
        background:orange;
    }
    100%{
        background:burlywood;
    }
}

.fm{
    width:480px;
    height:800px;
    background:#000;
    color:#fff;
    top:50%;
    left: 50%;
    position:absolute;
    margin-top:-10px;
    border-radius:30px;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
form{
    margin-top:-10px;
}
.reg label{
        display: block;
        text-align: left;
        margin:0;
        padding: 0;
        margin-bottom:10px;
        font-size:17px;
        font-weight:bold;
}
.reg input,textarea{
    width:100%;
    margin-bottom: 20px;
}
	.h2{
		text-align:center;
	}
	
    .reg input[type="submit"]{
    border: none;
    outline:none;
    height:25px;
    background: lightgrey;
    color:;
    font-size: 15px;
    margin-bottom:-1px;
    border-radius: 20px;
}
.reg input[type="submit"]:hover{
    cursor: pointer;
    background: blue;
    color: white;
}
</style>
</head>
<body>
<a href="main2.php" style=" color:red; font-size:20px; align:center;"><button type="submit" name="back" class="bt">Back</a></button>
	<div class="fm">
    <h2 style="margin-top:0;">Add new notice</h2>
     <button onclick="window.location.href='notice.php'"  style="float:right; margin-right:30px; margin-top:-30px; border-radius:20px; background:lightgrey; align:center;">RESET</button><br><br>
    <form method="POST" action="notice.php">
    <?php echo $err; ?>
    <div class="reg">
        <label>Select Date</label>
         <input type="date" name="from" placeholder='From this Date' required>
         <pre color="red">From this date notice is placed on portal</pre><br>
         <input type="date" name="to" placeholder='To this Date' required>
         <pre color="red">Upto this date notice is valid</pre><br>
</div>
    <div class="reg">
		<label>Enter Notice Id</label>
		<input type="text" name="id" placeholder="notice id" required>
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
        <input type="submit" value="ADD NEW NOTICE" name="add" class="btn"/><br><br>
	</div>
   
    </form>

    <form action="c_notice.php" method="POST">
    <div class=" reg">
        <input type="submit" value="DELETE NOTICE" name="del" class="btn"/><br><br>
    </div>
    <div class=" reg">
        <input type="submit" value="SEE NOTICES" name="see" class="btn"/><br><br>
	</div>
    </form>   
    </div>
</body>
</html>
<?php
}
?>