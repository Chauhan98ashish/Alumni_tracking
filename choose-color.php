<?php
require "dbcon.php";
session_start();
if(!isset($_SESSION['user'])){
    echo "YOU DON'T HAVE ACCESS TO THIS PAGE..Wait until you are not verified ";
    echo "<br> GO TO MAIN PAGE : <a href='index.php'>Home Page</a>";
    echo "<br>GO TO LOGIN PAGE : <a href='login.html'>Login Page</a>";
}
else{

	if($_SESSION['v']==0){
	echo "Wait until you are not verified ";
    echo "<br>GO BACK : <a href='main.php'>BACK</a>";
	}
	else{

?>
<html>
<head>
	<title>Goa Messenger System</title>
	<script>
		function check()
		{
			var p1 = document.getElementById['p1'].value;
			var p2 = document.getElementById['p2'].value;

			if(p1 == p2)
			{
				alert("Password not match.");
			}

		}

		function piliBG()
		{
			document.getElementById('msgbox').style.background = document.getElementById('msgbox').value;
			alert(document.getElementById('msgbox').value);
		}

		function piliTXT()
		{
			document.getElementById('txt-color').style.background = document.getElementById('txt-color').value;
			alert(document.getElementById('txt-color').value);
		}
	</script>
</head>

<body style="background-image:url('Dock.jpg')">
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">Goa</font>- Messenger
		</h1>
		<h4>CHOOSE YOUR COLORS</h4>

		<form action="update-color.php" method="POST">
			<table>
			<tr>
				<td class="align-right">Color for your message box:</td>
				<td>
					<select name="msgbox" id="msgbox" onchange="return piliBG();">
						<option value="skyblue" id="skyblue">&nbsp;</option>
						<option value="gray" id="gray"></option>	
						<option value="orange" id="orange"></option>
						<option value="blue" id="blue"></option>
						<option value="pink" id="pink"></option>
						<option value="yellow" id="yellow"></option>
						<option value="yellowgreen" id="yellowgreen"></option>
						<option value="peach" id="peach"></option>
						<option value="violet" id="violet"></option>
						<option value="red" id="red"></option>
						<option value="brown" id="brown"></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="align-right">Color for your text:</td>
				<td>
					<select name="txt-color" id="txt-color" onchange="return piliTXT();">
						<option value="skyblue" id="skyblue"></option>
						<option value="white" id="red"></option>	
						<option value="orange" id="orange"></option>
						<option value="blue" id="blue"></option>
						<option value="pink" id="pink"></option>
						<option value="yellow" id="yellow"></option>
						<option value="yellowgreen" id="yellowgreen"></option>
						<option value="peach" id="peach"></option>
						<option value="violet" id="violet"></option>
						<option value="red" id="red"></option>
						<option value="brown" id="brown"></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td colspan = "3" align="center">
					<a href="home.php"><input id="login" type="button" value="skip"/></a>
					<input id="reg" type="submit" value="save" onclick="return check()" />
				</td>
			</tr>
			</table>
		</form>
	</div>
</center>
</body>

</html>
<?php
	}
}
	?>

<style>
#msgbox,#txt-color
{
	width:150px;
	height:30px;
}
#brown
{
	background:brown;
}
#red
{
	background:red;
}
#violet
{
	background:violet;
}
#peach
{
	background:peach;
}
#yellowgreen
{
	background:yellowgreen;
}
#yellow
{
	background:yellow;
}
#pink
{
	background:pink;
}
#blue
{
	background:blue;
}
#orange
{
	background:orange;
}
#gray
{
	background:gray;
}
#skyblue
{
	background:skyblue;
}

.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
}

.align-right
{
	text-align:right;
}
#a
{
	text-decoration:none;
}

#reg,#login
{
	width:110px;
	height:30px;
	border-radius:5px;
	border:0px;
	color:white;
}

#reg
{
	background:orange;
}

#login
{
	background:skyblue;
}


#main
{
	height:auto;
	width:400px;
	border:2px white solid;
	float:center;
	margin-top:120px;
}
body
{
	background:black;
	color:white;
}
</style>