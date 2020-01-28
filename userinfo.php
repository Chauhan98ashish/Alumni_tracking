<?php
    $con = mysqli_connect('localhost','root');
    if($con){
    echo "Connection Successful";
    }
    else{
        echo "No Connection";
    }
    mysqli_select_db($con,'university_feedback');
    $user = $_POST['user'];
    $email = $_POST['email-id'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = " insert into comments_student (user, email-id, mobile-no., comment) values('$user', '$email', '$mobile', '$comment') ";
    mysqli_query($con, $query);
    header('location: index.php');
?>