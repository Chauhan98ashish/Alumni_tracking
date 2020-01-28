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

    $a=$_SESSION['user'];
    
    if($_POST['check']){

        $b= date_create($_SESSION['v']);
        $c= date_create(date('Y-m-d'));
        $x=$_POST['check'];

        $sql2="SELECT * FROM alumni where rno='$x' ";
        $rec2=mysqli_query($db,$sql2);
        
        $d=date_diff($b,$c)->format("%R%a");
        
        if(30<=$d){

            $res=mysqli_fetch_array($rec2);
        
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
            
            $mail->Subject = 'ACCOUNT DELETED';
            $mail->Body    = '<h4 align=center> Hi '.$res['name'].'your account have been <b> deleted from alumni portal </b> because there is some fault in your credentials , we gave you caution to update your details within a month!!<br>Since no updation occured, so we deleted your registration. Now you register again at portal.<br>Regards Directorate Goa</h4>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if(!$mail->send()) {
                 $mailErr = 'Mail could not be sent.'. $mail->ErrorInfo;
                 echo $mailErr;
                 echo "<a href='delete.php'>BACK</a>";
            } 
            else {
                echo "<script> alert('MAIL HAS BEEN SENT SUCCESSFULLY INFORMING DELETION OF ACCOUNT & DELETED SUCCESSFULLY!!') </script>";
                $sql1="DELETE FROM alumni where rno='$x'";
                $rec1=mysqli_query($db,$sql1);
                header("Refresh:0.05; url= delete.php");
            }
        }
        else{
            echo "You don't delete it.Check Last Mailed date<br>";
            echo "<a href='delete.php'>BACK</a>";
        }
    }
}
?>