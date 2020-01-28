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
    $res=mysqli_query($db,"select * from event where id='$a' ");
    if(mysqli_num_rows($res)){
        $r = mysqli_fetch_array($res);
        if(date("Y-m-d")<$r['event_date']){
             mysqli_query($db,"DELETE from event where id= '$a' ");
            echo "Event DELETED SUCCESSFULLY";
            echo "<br><a href='event.php'>BACK</a>";
        }
        else{
            echo "No need to delete this event as it had been done.";
            echo "<br><a href='event.php'>BACK</a>";
        }
    }
    else{
        echo "NO SUCH EVENT FOUND";
        echo "<br><a href='event.php'>BACK</a>";
    }
}

if(isset($_POST['see'])){
    $res=mysqli_query($db,"select * from event ");
    if(mysqli_num_rows($res)){
        while($rec=mysqli_fetch_array($res)){
            echo "<br>";
            ?>
            <style>
                body{
                    background-image:url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-01.jpg");
                }
            .tab{
	border-collapse:collapse;
    margin-top: 5px;
	font-size:0.5cm;
    min-width:400px;
    top:70%;
    left:50%;
    background-color: white;
}
.tat{
	background-color:#009879;
	color:#ffffff;
	text-align:center;
	font-weight:bold;
} 
.tab th,.tab td{
    padding: 12px 15px;
    border:1px solid lightgray;
    text-align:center;
}
.tab tr{
	border-bottom:1px solid #dddddd;
}
.btn{
   padding: 10px 20px;
   margin-top:10px;
   font-size:13px;
   border: none;
   outline: none;
   font-family:"montserrat";
   border-radius: 20px;
   width: 90px;
   background:#fb2525;
   }
  .btn:hover{
   cursor: pointer;
   background:green;
  }
            </style>
                       <table style="width:100%" class="tab">
                       <tr class="tat">
                        <th>Event Date</th>
                       <th>Id</th>
                       <th>TITLE</th>
                       <th>DETAIL</th>
                       </tr>
                       <tr>
                       <td><?php echo $rec['event_date']; ?></td>
                       <td><?php echo $rec['id']; ?>  </td>
                       <td><?php echo $rec['subject'];  ?></td>
                       <td><?php echo $rec['detail']; ?></td>
                   </tr>
                      </table>
                      <a href="event.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
    <?php
        }
         
    }
    else{
        echo "NO EVENT FOUND";
    }

}

if(isset($_POST['del']))
{  
?>

<!DOCTYPE html>
<html>
<head>
<title>DELETE Event</title>

<style>
    body{
        background-image:url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-01.jpg");
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
.back p{
    margin:0;
    padding: 0;
    font-weight:bold;
    font-size:18px;
}
.back input{
    width:100%;
    margin-bottom: 20px;
}
.back input[type="text"]{
    border:none;
    border-bottom:1px solid rgb(189, 176, 176);
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
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
    <a href="main2.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
    <div class="back">
    <form action="c_event.php" method="POST">
    <p>Event id:</p>
    <input type="text" name="id" placeholder="Event id" required><br>
    <input type="submit" name="delete" value="DELETE">
    
    </form>
</div>
</body>
</html>

<?php
}
}
?>