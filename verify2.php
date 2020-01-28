<?php
session_start();
require "dbcon.php";
require 'phpmailer/PHPMailerAutoload.php';

if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{
    $a=$_SESSION['alumni'];
    $sql="SELECT * FROM alumni where rno='$a' and verified='1' ";
    $rec=mysqli_query($db,$sql);

    if(mysqli_num_rows($rec)){
    $res=mysqli_fetch_array($rec);

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
    $mail->addAddress($res['email']);                               // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('directorate2goa@gmail.com', 'Directorate');
    //$mail->addCC('cc@example.com');//$mail->addBCC('bcc@example.com');
    //$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
    $mail->isHTML(true);                                 // Set email format to HTML
    
    $mail->Subject = 'Verified Successfully';
    $mail->Body    = '<h3 align=center> Hi '.$res['name'].'<br> your User Id: '.$res['alumni_id'].'<br> have been <b>Verified successfully by your college!</b>.<br>Now you will do messages at portal through messenger.</h3>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
         $mailErr = 'Mail could not be sent.'. $mail->ErrorInfo;
         echo $mailErr;
         echo "<a href='verify.php'>BACK</a>";
    } else {
        echo "<script> alert('MAIL HAS BEEN SENT SUCCESSFULLY. INFORMING OF SUCCESSFUL VERIFICATION') </script>";
        header("Refresh:0.05; url= verify.php");
    }
}
}

?>