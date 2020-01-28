<?php
session_start();
require "dbcon.php";

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    $a=$_SESSION['user'];
       
        $sql1="SELECT * FROM alumni where verified!=0 and verified!=1 and college='$a'";
        $rec1=mysqli_query($db,$sql1);
        
        if(mysqli_num_rows($rec1)){
          while($res=mysqli_fetch_array($rec1)){
            $r=$res['rno'];
           $_SESSION['v']=$res['verified'];

            ?>
            <!DOCTYPE html>
            <html>
                <head>
                    <title>DELETE ALUMNI</title>
                    <style>
                        #mid{
                            position: absolute;
                            top: 30%;
                            left: 30%;
                            padding: 10px;
                            border-radius: 60px;
                            text-align: center;
                            box-shadow: 0 0 3px 0 white;
                            background: rgb(240, 148, 11);
                            width: 500px;
                            height:auto;
                            margin: 20px auto;
                        }
                        .uu{
                            background-image: url("https://www.dcmmoguls.com/wp-content/uploads/2016/09/3D-Background-Images-For-Websites-1920x1080.jpg");
                            background-size: cover;
                            width: 100%;
                            height: 100vh;
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
input[type=submit],button{
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
                    </style>
                </head>
                <body>
                <div class="uu">
                <div class="er">
                <input type="button" value="BACK" onclick="window.location.href='main3.php' ;" >
                    </div>
                    <div id="mid">
                        <?php echo 'Name: '.$res['name'].'<br>Alumni id: '.$res['alumni_id'].'<br>Roll no: '.$res['rno'].'<br>Email: '.$res['email'].'<br>Year: '.$res['year'].'<br><b>Last mailed: '.$res['verified'].'</b>'; ?>
                        <form action="delete1.php" method="POST">
                            <br>
                             DELETE FOR:<br>
                            <input type="hidden" value='1'>
                            <input type="submit" name="check" value="<?php echo $r; ?>" >
                        </form> 
                    </div>
                    </div>
                </body>
        <?php
          }
        }
        else{
            echo "<script> alert('NO ALUMNI TO DELETE!!') </script>";
        }
    }

    ?>