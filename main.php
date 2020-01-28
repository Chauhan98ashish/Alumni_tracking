    
<!DOCTYPE html>
<html>
    <head>
        <title>MAIN PAGE</title>
        <link rel="stylesheet" type="text/css" href="main1.css">
       
     </head>
    <body bgcolor="#79a6d2">
    <hr>
    <h3 style="margin-left: 15px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjVXybwwswQWwuHWko_d8yyrqqLOYBqlGWkkKNs-yDqqrb2YuQ&s" id="s1"> &nbsp&nbspHII!
     <?php
    session_start();
    require "dbcon.php";
    if(!isset($_SESSION['user'])){
    echo"<script> alert('Log in properly..') </script>";
    header("Refresh=0.5; url:'alumni1.php'");
    }
    else{
        $a=$_SESSION['user'];
        $sql="SELECT * FROM alumni where alumni_id='$a' ";
        $rec=mysqli_query($db,$sql);
        $res=mysqli_fetch_array($rec);
        $_SESSION['col']=$res['college'];
        $_SESSION['v']=$res['verified'];
        echo $a.' ( '.$_SESSION['col'].' )';
    }
    ?>
    <div id="l">
    <a href="alu_event.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4D5CapdQe7oQoAiQ1yp2mKKtdUrD_btJgGR0I9rvgvIjtduZg&s" alt="Notice" id="s7"></a>
    <a href="logout.php"><img src="https://bit.ly/37TS5eS" id="s2" alt="Logout"></a>
    </div></h3>
    <hr>
    <fieldset id="s3">
        <table>
            <tr>
                <td>
                    <a href="profile.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/220px-User_icon_2.svg.png" alt="User Profile" id="s4">
                    <h4 align="center">User Profile</a></h4>
                </td>
                <td style="padding-left: 15px;">
                    <a href="editprofile.php"><img src="https://cdn4.iconfinder.com/data/icons/documents-15/144/edit-modify-document-account-profile-details-user-512.png" id="s5">
                    <h4 align="center">Edit Profile</a></h4>
                </td>
                <td style="padding-left: 30px;">
                    <a href="home.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx8rQOWv2i1cvLN1wef-k4dNt8njLDE9nEO1rgNew9UFPsHy-g&s" id="s6">
                    <h4 align="center">Group Chat</a></h4>
                </td>
            </tr>
        </table>
    </fieldset>
    <hr style="margin-top: 100px;font-size: 25px;">
    <a href="about.php" style="text-decoration: none;">University of GOA</a>
    (Government of Goa)
    <b><i style="float: right;margin-right: 100px;">Contact Us:</h4></i></b>
    <br>
    ALUMNI Portal
    <i style="float: right;">8744052891,7290034978/79</i>
    </body>
</html>
