<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP PAGE</title>
        <link rel="stylesheet" href="signup.css">
        <style>
          div{
            padding-left: 10px;
          }
          pre{
            padding-left:2px;
            color: red;
          }
          p{
            color:red;
          }
          .btn{
            float:left;
            padding: 10px 20px;
            border: none;
            outline: none;
            font-family:"montserrat";
            border-radius: 20px;
            width: 200px;
          }
          .btn:hover{
          cursor: pointer;
        background:burlywood;
          }
        a:hover{
          cursor: pointer;
          background: greenyellow;
          }
          </style>
          
    </head>
    <body>
    <a href="index.php" style="  font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
    <br><br><br>
    <?php

require 'phpmailer/PHPMailerAutoload.php';
require "dbcon.php";
$temp=0;
$nameErr = $emailErr = $genderErr = $contErr = $uidErr = $cErr = $passErr = $rErr = $stat1Err = $stat2Err = $dErr = $aErr = $yErr =  $mailErr = "";
$name =  $email = $gender = $addr = $dob = $contact = $uid = $pass = $stat1  = $rno = $cname = $year = $stat2 = $about = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $addr=test_input($_POST["addr"]);
      $dob=test_input($_POST["dob"]);
      $email = test_input($_POST["email"]);
      $uid=test_input($_POST["id"]);
      $pass=$_POST["pass"];
      $stat1=$_POST["status"];
      $rno = test_input($_POST["rno"]);
      $cname = $_POST["college"];
      $year=$_POST["year"];
      $stat2=$_POST["work"];

     // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        $temp=1;
      }
      
      if (!preg_match("/^[0-9]*$/",$_POST["cont"]) || strlen($_POST["cont"])!=10) {
        $contErr = "Only 10 digits numbers are required";
        $temp=1;
      }
      else{
        $contact=test_input($_POST["cont"]);
      }

      if (!preg_match("/^[0-9A-Z]*$/",$rno)) {
        $rErr = "Only numbers and capital alphabets are required";
        $temp=1;
      }

      if (!preg_match("/^[a-z@0-9_.]*$/",$uid)) {
        $uidErr = "Only small alphabets,digits,(@,_,.) allowed";
        $temp=1;
      }


      if (!preg_match("/^[a-zA-Z0-9@#$]*$/",$pass) || strlen($pass)<=8) {
        $passErr = "Only small and capital alphabets, digits,special characters(@,#,$) allowed";
        $temp=1;
      }
     
      if ($stat1 == 'select') {
        $stat1Err = "Please select it";
        $temp=1;
      }
      if ($cname == 'select') {
        $cErr = "Please select it";
        $temp=1;
      }
      if ($stat2 == 'select') {
        $stat2Err = "Please select it";
        $temp=1;
      }
      if ($year== 'select') {
        $yErr = "Please select it";
        $temp=1;
      }

      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $temp=1;
      }
    
      if (empty($_POST["about"]) || strlen($_POST["about"])<5) {
        $aErr = "Description is required";
        $temp=1;
      } else {
        $about=test_input($_POST["about"]);
      }
  
    if (empty($_POST["sex"])) {
      $genderErr = "Gender is required";
      $temp=1;
    } else {
      $gender = test_input($_POST["sex"]);
    }
if($temp==0){
    $sql="SELECT * from alumni where alumni_id='$uid' ";
    $rec=mysqli_query($db,$sql);
    if(mysqli_num_rows($rec)){
      $uidErr = "User Id must be unique or this id is not available";
    }
    else{
      $sql1="SELECT * from alumni where rno='$rno' ";
      $rec1=mysqli_query($db,$sql1);
      if(mysqli_num_rows($rec1)){
        echo "<script> alert('This roll no exists..Please login!!') </script>";
        header("Refresh:0.05; url=alumni1.php");
      }
      else{
  
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'directorate2goa@gmail.com';        // SMTP username
        $mail->Password = 'Goa@directorate';                       // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('directorate2goa@gmail.com', 'Directorate');
        $mail->addAddress($email);                               // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('directorate2goa@gmail.com', 'Directorate');
        //$mail->addCC('cc@example.com');//$mail->addBCC('bcc@example.com');
        //$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Registered Successfully';
        $mail->Body    = '<h3 align=center> Hi '.$name.'<br> your User Id: '.$uid.'<br> have been <b>Registerd successfully!</b>.<br>Please wait until your college verify you.</h3>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
          echo "<script> alert('Mail could not be sent.') </script>";
             header("Refresh:0.05; url=alumni1.php");
        } else {
            
          $cry=md5($pass);
          $sql2="INSERT into alumni values ('$name','$uid','$rno','$cry','$contact','$addr','$dob','$email','$stat1','$gender','$cname','$year','$stat2','$about','0','0')";
          $rec2=mysqli_query($db,$sql2);
          $addclr=mysqli_query($db,"INSERT INTO colortb VALUES('','$uid,'skyblue','white')");
            echo "<script> alert('Registered Successfully and mail has been sent.Check now!!')</script>";
            header("Refresh:0.05; url= alumni1.php");
      }
    }
  }
}
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<div class="box">

        <h1>SIGN UP FORM</h1>
        <p>Please fill out all details properly and you get a gmail when registered successfully.</p>
        <hr><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="left">
            <fieldset>
                <legend>PERSONAL INFORMATION</legend><br>
                <div>
                <b>Full Name:</b><span id="f"><?php echo $nameErr;?></span>
                <input type="text" name="name" placeholder="name" required>
                <br></div>
                <div>
                <b>Permanent Address:</b>
                <input type="text" name="addr" placeholder="full address" required><br></div>
                <div>
                <b>Date of Birth:</b>
                <input type="date" name="dob" placeholder="dob" required><br></div>
                <div>
                <b>Email Address:</b><span id="f"><?php echo $emailErr;?></span>
                <input type="email" name="email" placeholder="abc@xyz" required>
                <br></div>
                <div>
                <b>Telephone or Contact Number:</b><span id="f"><?php echo $contErr;?></span>
                <input type="text" name="cont" placeholder="10 digit contact number" required >
                <br></div>
                <div>
                <b>User Id:</b><span id="f"><?php echo $uidErr;?></span>
                <input type="text" name="id" placeholder="Unique user id" required>
                <br></div>
                <div>
                <b>Password:</b><span id="f"><?php echo $passErr;?></span>
                <input type="password" name="pass" id="pass" placeholder="password" required>
                <br><pre>Minimum 8 characters including alphabets, digits,@,#,$</pre>
                <input type="checkbox" onclick="myFunction()">Show Password
                <script>
            function myFunction() {
              var x = document.getElementById("pass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script><br></div>
                 <div>
                <b>Civil Status:</b>  
                <select name="status" required>
                    <option value="select">--SELECT--</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
                <span id="f"><?php echo $stat1Err;?></span><br></div>
                <div>
                <b>Sex:</b>
                <input type="radio" name="sex" value="Male">Male
                <input type="radio" name="sex" value="Female">Female
                <span id="f"><?php echo $genderErr;?></span><br></div>
            </fieldset>
            </div>
            <br><br>
            <div class="right">
            <fieldset>
                <legend>Educational details</legend>
                <div>
                <b>Roll Number:</b> <span id="f"><?php echo $rErr;?></span>
                <input type="text" name="rno" placeholder="roll no" required>
               <br></div>
                <div>
                <b>College Name:</b><span id="f"><?php echo $cErr;?></span>
                <select name="college" required>
                  <option value='select'>---SELECT---</option>
                <?php

                $query="SELECT coll_name FROM college order by coll_name";
                $result=mysqli_query($db,$query);
                while ($row=mysqli_fetch_array($result)){
                $coll=$row['coll_name'];

                echo "<option value='".$coll."'>".$coll."</option>";
                }
              ?>
                </select>
                <br></div>         
                <div>
                <b>Passing year:</b><span id="f"><?php echo $yErr;?></span>
                <select name="year">
                <option value="select">--SELECT--</option>
                <script>
                var myDate = new Date();
                var year = myDate.getFullYear();
                for(var i = 2001; i < year+1; i++){
	               document.write('<option value="'+i+'">'+i+'</option>');
                 }
                </script>
                </select>
                <br></div>
                <div>
                <b>Present Work Status:</b><span id="f"><?php echo $stat2Err;?>
                <select name="work">
                    <option value="select">--SELECT--</option>
                    <option value="Studies">Higher Studies</option>
                    <option value="Startup">Start up</option>
                    <option value="Job">Job</option>
                </select>
                </span><br></div>
                <div>
               <b>Description of work status:</b>
             <textarea name="about" placeholder="Describe your present work status in minimum 50 characters like course name,college name or job description,address"></textarea>
            <br></div>
            </fieldset><br>
            <input type="submit" name="submit" value="SUBMIT"><br>
            <h4>Have an account?Want to login <a href='alumni1.php'>LOGIN</a></h4>
            </div>
        </form>
        </div>
    </body>
</html>