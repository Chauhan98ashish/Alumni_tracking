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
        <title>MESSAGE ALUMNI</title>
        <style>
            .bn{
                background-image: url("https://www.jakpost.travel/imgfiles/full/9/98034/hd-wallpaper-website.jpg");
                background-size: cover;
                width: 100%;
                height: 100vh;
            }
            .nb{
                position: absolute;
                top: 20%;
                left: 35%;
                width: 400px;
                height: 450px;
                background-color: rgb(255,100,60);
                text-align: center;
                border-radius: 10%;
            }
            #gg{
                padding-top: 40px;
            }
            textarea{
                width: 80%;
                height: 80px;
            }
            input[type="text"]{
                width: 80%;
                height: 40px;
            }
            input[type=submit],button{
    border-radius: 5px;
    width: 80px;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    opacity: 0.9;
}
input[type=button],button{
    border-radius: 5px;
    width: 100px;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    opacity: 0.9;
}
.akg{
    float:left;
    padding: 25px;
    width: 90px;
    height: 100px;
    border-radius: 50%;
    animation-delay: 2s;
    animation-iteration-count: 1;
}
.gfh{
    float: right;
    padding-right: 10px;
}
        </style>
        <link rel="stylesheet" href="css/animate.css">
    </head>
    <body>
    <div class="bn">
        <div class="gfh">
        <input type="button" value="BACK" onclick="window.location.href='main2.php' ;" >
</div>
    <a href="https://www.unigoa.ac.in/"><img class='akg wow flip' title="Affiliated to University of Goa" src="http://bit.ly/2Nq1nHJ"></a>
    <div class="nb">
        <div id="gg">
        <form action="message.php" method="POST">
            <p style="font-size: 20px"><b>Mobile Number</b></p><br>
            <input type="text" name="mob" placeholder="Mobile no separated with commas" required><br><br>
            <p style="font-size: 20px"><b>Message</b></p><br>
            <textarea name="msg" placeholder="MESSAGE to ALUMNI here"></textarea><br><br>
            <input type='submit' value="SEND" name="sub">
        </form>
        </div>
        </div>
        </div>
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
    </body>
</html>

<?php

if(isset($_POST['sub'])){

//Your authentication key
$authKey = "ur auth key{private}";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['mob'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "DIRGOA";

$msg=$_POST['msg'];

//Your message to send, Add URL encoding here.
$message = urlencode($msg);

//Define route 
//$route = "default";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    //'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}


echo "<script> alert('YOUR MESSAGE TRANSACTION ID IS .$output.') </script>";

curl_close($ch);
}
}
?>
