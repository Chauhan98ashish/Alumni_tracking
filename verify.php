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
    $sql="SELECT * FROM alumni where college='$a' and verified='0' ";
    $rec=mysqli_query($db,$sql);
    

    if(mysqli_num_rows($rec)){
        while($res=mysqli_fetch_array($rec)){
            $r=$res['rno'];
           

    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>VERIFY ALUMNI</title>
            <style>
                body{
                background-color: blue;
                }
                #mid{
                    padding: 10px;
                    border-radius: 60px;
                    text-align: center;
                    box-shadow: 0 0 3px 0 white;
                    background: rgb(240, 148, 11);
                    width: 1000px;
                    height:150px;
                    margin: 20px auto;
                }
            </style>
        </head>
        <body>
            <div class="bgd">
            <div id="mid">
                <?php echo 'Name: '.$res['name'].'<br>Alumni id: '.$res['alumni_id'].'<br>Roll no: '.$res['rno'].'<br>Email: '.$res['email'].'<br>Year: '.$res['year']; ?>
                <form action="verify1.php" method="POST">
                    <br>
                    VERIFY FOR:<br>
                    <input type="hidden" value='1'>
                    <input type="submit" name="check" value="<?php echo $r ?>" >
                </form> 
            </div>
            </div>
        </body>
<?php
        }
    }
    else{
        echo "<h3 align='center'>NO NEW ALUMNI REGISTERED!!</h3>";
    }

}
?>