<!DOCTYPE html>
<html>
    <head>
        <title>NOTICES</title>
        <style>
            .abs{
                background: url('http://bit.ly/3737mtP');
            }
            .aa{
                font-size: 50px;
            }
            #note{
                padding: 20px;
                border-radius: 60px;
                text-align: center;
                box-shadow: 0 0 3px 0 white;
                background: rgb(240, 148, 11);
                width: auto;
                height:auto;
                margin: 20px auto;
            }
        </style>
    </head>
    <body class="abs">
    <?php include 'menu.php' ?>
    <p class="aa text-white text-center">Important Notices<p>
    </body>
</html>
<?php
 
 require "dbcon.php";
 $sql="SELECT * FROM notice where CURDATE()>=from_date and CURDATE()<=to_date order by from_date ";
 
 $rec=mysqli_query($db,$sql);
 if(mysqli_num_rows($rec)){

     while($res=mysqli_fetch_array($rec)){
     echo "<div id='note'><h4><u>".$res['subject']."</u></h4><br>
            <h5 align='justify'>".$res['detail']."</h5><br></div>";
     }
 }
 else{
   echo "<h4 id='h'>NO NOTICE NOW</h4>";
 }



?>