<style>
.tab{
	border-collapse:collapse;
    margin-left:300px;
    margin-right:200px;
	font-size:0.5cm;
	min-width:500px;
}
.tat{
	background-color:#009879;
	color:#ffffff;
	text-align:left;
	font-weight:bold;
} 
.tab th,.tab td{
    padding: 12px 15px;
    border:1px solid lightgray;
}
.tab tr{
	border-bottom:1px solid #dddddd;
}
body{
    background:linear-gradient(-45deg,#EE7752,#E73C7E,#23D5AB);
    height:100vh;
    width:100%;
    color:#fff;
    position:relative;
}
.btn{
   padding: 10px 20px;
   margin-top:10px;
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


</style>
<?php

session_start();
require "dbcon.php";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{

if(isset($_POST['delete'])){
    $a=$_POST['id'];
    $res=mysqli_query($db,"select * from notice where id='$a' ");
    if(mysqli_num_rows($res)){
        mysqli_query($db,"DELETE from notice where id= '$a' ");
        echo "NOTICE DELETED SUCCESSFULLY";
        echo "<br><a href='notice.php'>BACK</a>";
    }
    else{
        echo "NO SUCH NOTICE FOUND";
        echo "<br><a href='notice.php'>BACK</a>";
    }
}

if(isset($_POST['see'])){
    $res=mysqli_query($db,"select * from notice ");
    if(mysqli_num_rows($res))
    {
        ?>
        <a href="notice.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>        
        <table class="tab" align:"center";>
            <Tr class="tat">
                <th>VALID FROM</th>
                <th>UPTO</th>
                <th>NOTICE ID</th>
                <th>TITLE</th>
                <th>SUBJECT</th>
            </Tr>
                <?php 
        
        while($row=mysqli_fetch_assoc($res))
        {
        
        echo "<Tr>";
       
        echo "<td>".$row['from_date']."</td>";
        echo "<td>".$row['to_date']."</td>";
         echo "<td>".$row['id']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['detail']."</td>";
        echo "</Tr>";
        
        }
                ?>
                
        </table>
    <?php
        }
         
    }
    else{
        echo "NO NOTICE FOUND";

    }

}

if(isset($_POST['del']))
{
?>

<!DOCTYPE html>
<html>
<head>
    
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
.reg label{
        display: block;
        text-align: left;
        margin:0;
        padding: 0;
        font-weight:bold;
}
.reg input{
    width:100%;
    margin-bottom: 20px;
}
.reg input[type="text"]{
    border:none;
    border-bottom:1px solid #fff;
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.reg input{
    width:100%;
    margin-bottom: 20px;
}
	.h2{
		text-align:center;
	}
	.fm{
		width:600px;
		box-shadow:0 0 3px rgba(0,0,0,0.3);
        background:#fff;
        padding:20px;
		
		text-align:center;
    }
    
    .reg{
    width:420px;
    height:500px;
    background:#000;
    color:#fff;
    top:50%;
    left: 50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius:25px;
}
.reg p{
    margin:0;
    padding: 0;
    font-weight:bold;
}
.reg input[type="submit"]{
    border: none;
    outline:none;
    height:40px;
    margin-top:300px;
    background: #fb2525;
    color:#fff;
    font-size: 14px;
    border-radius: 20px;
}
.reg input[type="submit"]:hover{
    cursor: pointer;
    background: lightgreen;
    color: #000;
}

.regr{
	text-align:center;
	margin-left:50px;
	margin-right:50px;
}
.btn{
   padding: 10px 20px;
   margin-top:10px;
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
</style>

<title>DELETE Notice</title>
</head>
<body>
<a href="notice.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
    <section>
    <div class="reg">
        
    <form action="c_notice.php" method="POST">
        <p>Notice id:</p>
    <input type="text" name="id" placeholder="Notice id" required><br>
    <input type="submit" name="delete" value="DELETE">
</div>
    </form>
</section>
</body>
</html>

<?php
}

?>