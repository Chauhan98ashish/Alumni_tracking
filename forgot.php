<?php
require "dbcon.php";

require 'phpmailer/PHPMailerAutoload.php';

if(isset($_POST['sub'])){
    $user=$_POST['uid'];
    $sql="SELECT * from alumni where rno='$user' ";
    $rec=mysqli_query($db,$sql);
    if(mysqli_num_rows($rec)){

        $res=mysqli_fetch_array($rec);
        $recover = md5($user);
        $email=$res['email'];
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
        $mail->Subject = 'RESET PASSWORD';
        $mail->Body    = "Please click the following link <a href='http://localhost/sih/reset.php?code=$recover'>reset password </a> for resetting your password";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
             $mailErr = 'Mail could not be sent.'. $mail->ErrorInfo;
        }
        else{
         echo "Password reset link is sent to email <b>".$res['email']."</b><br>Please Check to reset it!!<br>";
        echo "Incorrect Email..Want to change it <a href='email.php' class='mid'> Change email</a>";
        
        $sql1="UPDATE alumni SET pass_rec='$recover' where rno='$user' ";
        $rec1=mysqli_query($db,$sql1);
        }
    }
    else{
        echo "<script> alert('No such Roll Number found...Please Signup.') </script>";
        header("Refresh:0.05 ; url= signup.php");
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <style>
            .mid{
                text-align: center;
            }
            .btn, input[type='submit']{
            align:left;
            padding: 10px;
            border: none;
            outline: none;
            font-family:"montserrat";
            border-radius: 20px;
            width: 200px;
          }
          .btn:hover, input[type='submit']{
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
       <div class="mid">
            <a href="alumni1.php" style="  font-size:20px; align:center;"><button type="submit" name="back" class="btn">Back</a></button>
            <h2>FORGET PASSWORD</h2>
            <form action="forgot.php" method="POST">
                <b>ROLL NUMBER</b>
                <input type="text" name="uid" placeholder="roll no" required><br><br>
                <input type="submit" name="sub" value="Submit">
            </form>
       </div>
    </body>
</html>