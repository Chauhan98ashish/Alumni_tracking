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
<title> Events</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<style>
    .qwe{
        background-image: url("https://cdn.wallpapersafari.com/38/19/Gx7iyR.jpg");
        background-size: cover;
        width: 100%;
        height: 100vh;
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
.aa{
    font-size: 25px;
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
.er{
    float: right;
}
.tre{
    padding-left: 20px;
}
</style>
</head>
<body>
    <div class="qwe">
        <div class="tre">
    <div class="er">
                <input type="button" value="BACK" onclick="window.location.href='main.php' ;" >
                    </div>
    <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
    <h1 class="text-center text-white">EVENTS</h1>
    <?php
    $d=date('Y-m-d');
    $res=mysqli_query($db,"SELECT * from event ");
    echo "<br><br><br>";
    echo '<h3>Events by DIRECTORATE</h3>';
    if(mysqli_num_rows($res)){
    ?>
                       <table style="width:100%">
                       <tr>
                        <th class="text-white aa">Event Date</th>
                       <th class="text-white aa">TITLE</th>
                       <th class="text-white aa">DETAIL</th>
                       </tr>
     <?php                  
                        
                while($rec=mysqli_fetch_array($res)){
                 echo "<br>";
                 if($rec['event_date']>=$d){
        ?>
                       <tr>
                       <td class="text-white"><?php echo $rec['event_date']; ?></td>
                       <td class="text-white"><?php echo $rec['subject'];  ?></td>
                       <td class="text-white"><?php echo $rec['detail']; ?></td>
                   </tr>
                      </table>
    <?php
                 }
        }
    }
    else{
        echo "NO EVENT FOUND";
    }
       $x=$_SESSION['col'];
        $y=$_SESSION['v'];
        if($y==0){
            echo "<br><br> NOTE:- You have not been verified yet by your college..So, not event by college";
        }
        else{
            echo "<h3>Events by COLLEGE ".$x.' </h3>'; 
            $res1=mysqli_query($db,"SELECT * from col_event where college='$x' ");
            if(mysqli_num_rows($res1)){
                ?>
                <table style="width:100%">
                <tr>
                 <th class="text-white">Event Date</th>
                <th class="text-white">TITLE</th>
                <th class="text-white">DETAIL</th>
                </tr>
<?php                  
                 
         while($rec1=mysqli_fetch_array($res1)){
          echo "<br>";
          if($rec1['on_d']>=$d){
 ?>
                <tr>
                <td class="text-white"><?php echo $rec1['on_d']; ?></td>
                <td class="text-white"><?php echo $rec1['sub'];  ?></td>
                <td class="text-white"><?php echo $rec1['detail']; ?></td>
            </tr>
               </table>
<?php
          }  
            
        }
        }
        else{
            echo " NOTE:- NO EVENT FOUND by College";
           
        }
    }
}
    ?>
    </div>
</div>
    <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>