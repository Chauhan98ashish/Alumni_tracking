<!DOCTYPE html>
    <html>
    <head>
        <title>SEARCH USER</title>
        <link rel="stylesheet"  type="text/css" href="not.css">
        <style>
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
    </head>
    <body>
    <a href="main3.php" style=" color:white; font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
        <button onclick="window.location.href='search.php' "class="btn">Reset </button>
        <div class="reg" style="margin-top:0px;">
        <form action="search.php" method="POST">
        
            <div class="k">
            <div class="lab">Enter Roll number</div>
            <input type="text"  name="rno" placeholder="Roll Number">
            <input type="submit" name="sub1" value="SEARCH"><br><br>
            
            <div class="kl">
            <div class="lab">Enter Name</div>
            <input type="text"  name="name" placeholder="Name or some alphabets of name">
            <input type="submit" name="sub2" value="SEARCH"><br><br>
            </div>
            <div class="km">
            <div class="lab">Enter Year</div>
            <input type="text"  name="year" placeholder="Passing Year">
            <input type="submit" name="sub3" value="SEARCH">
            </div>
        
        </form>
        </div>
    </body>
    </html>
<?php

session_start();
require "dbcon.php";

$rec="";
$temp=0;

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    if(isset($_POST['sub1'])){
        $r=$_POST['rno'];
        $sql="SELECT * from alumni where rno LIKE '%$r%' ";
        $rec=mysqli_query($db,$sql);
        $temp=1;
    }
    if(isset($_POST['sub2'])){
        $r=$_POST['name'];
        $sql="SELECT * from alumni where name LIKE '%$r%' ";
        $rec=mysqli_query($db,$sql);
        $temp=1;
    }
    if(isset($_POST['sub3'])){
        $r=$_POST['year'];
        $sql="SELECT * from alumni where year LIKE '%$r%' ";
        $rec=mysqli_query($db,$sql);
        $temp=1;
    }
        if($rec){ 
            ?>        
            <div class="tale" align="center;">
            <table class="tab" align:"center";>
                <Tr class="tat">
                    <th>NAME</th>
                    <th>ROLL NO</th>
                    <th>USER ID</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th>COLLEGE</th>
                    <th>YEAR</th>
                </Tr>
        
                    <?php 
            
            while($row=mysqli_fetch_assoc($rec))
            {
                
            echo "<Tr>";
           
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['rno']."</td>";
             echo "<td>".$row['alumni_id']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['college']."</td>";
            echo "<td>".$row['year']."</td>";
            echo "</Tr>";
            
            
            }
                    ?>
                    
            </table>
        </div>
      <?php         
           }

        }
        if($temp==1){
            echo "<br>No More Users Found";
        }
    
?>
<?php
    

?>
    

