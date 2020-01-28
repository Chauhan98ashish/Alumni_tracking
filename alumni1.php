<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="admin1.css">
        <script>
            function myFunction() {
              var x = document.getElementById("pass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>
    </head>
    <body>
            <div id="login">
                     
                <form action="ad_login.php" method="POST">
                    <b>USER ID</b><br>
                    <input type="text" name="user" placeholder="registered user id" required><br><br>
                    <b>PASSWORD</b><br>
                    <input type="password" name="password" placeholder="PASSWORD" id="pass" required><br>
                    <input type="checkbox" onclick="myFunction()" style="margin-bottom:15px">Show Password<br><br>
                    <input type="submit" name="login" value="LOGIN"><br>
                    <a href="forgot.php">FORGOT PASSWORD</a>
                </form>
            </div>
            <div id="ryt">
                <h2><strong>DON'T<br>HAVE<br>ANY<br>ACCOUNT</strong></h2>
                <p>If you are new user than click the under button signup</p>
                <button onclick="window.location.href='signup.php'">SIGN UP</button>
            </div>
        
    </body>
</html>