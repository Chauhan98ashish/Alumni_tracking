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
        <title>MAIN PAGE</title>
        <link rel="stylesheet" type="text/css" href="design.css">
        
    </head>
    <body>
    <div class="cent">
    <h1>WELCOME DIRECTORATE</h1>
    <a href="logout.php" ><img src="https://bit.ly/37TS5eS" class="a" style="height:75px; border-radius:50%;"></a>
    </div>
    <div class="dash">
    <table align="center" style="width:50%;">
    <tr>
    <td >1.</td><td><button class="btn" onclick="window.location.href='add_college.php'">ADD COLLEGE</button><br></td>
</tr>
    <tr>
    <td>2.</td><td><button class="btn" onclick="window.location.href='search.php'">SEARCH ALUMNI</button><br></td>
 </tr>
 <tr><td>3.</td><td><button class="btn" onclick="window.location.href='notice.php'">PUBLISH NOTICE</button><br></td></tr>
 <tr><td>4.</td><td><button class="btn" onclick="window.location.href='event.php'">EVENT INFORMATION</button><br></td></tr>
 <tr><td>5.</td><td><button class="btn" onclick="window.location.href='message.php'">MAIL/MESSAGE ALUMNI</button><br></td></tr>
    
</div>
</table>
    </body>
    </html>
<?php
    }

?>
