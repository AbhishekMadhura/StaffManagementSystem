<html>
<head>
<title>Login form</title>
<link rel="stylesheet" href="menu.css" >
<link rel="stylesheet" href="Adminlogin.css" >
<script type="text/javascript">
function togglemenu()
{
document.getElementById('sidebar').classList.toggle('active');
}
</script>
<style>
#btn2
{
display:block;
width:10%;
height:3%;
font-size:15px;
color:black;
position:absolute;
left:102%;
top:3px;
border-radius:3px;
}
.tr{
	transition: 0.7s;
}
input{
	transition: 0.2s;
}
	</style>
</head>
<body id="banner">
<div id="topbar">
<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-2px;right:5px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM</div></div></div>
<div class="toggle" onclick="togglemenu()">
<span></span>
<span></span>
<span></span>
</div>
<div id="sidebar" class="tr">
<p style="padding-top:10px">
<div onclick="togglemenu()">
<img src="close.png" id="btn2" />
</div>
<ul id="font">
<li><a href="index.php">Home</a></li>
<li><a href="Adminlogin.php">Admin Login</a></li>
<li><a href="staff login.php">Staff Login</a></li>
</ul>
</div>
<center>
<p style="padding:10px">

</center>
<p style="padding: 80px;" />
<div id="adminlogo">
	<img src="admin2.png" style="width: 40%;
height: 50%;padding-left:50px;" />
</div>
<div id="loginbar">
	<center>
<form method="POST"  action="">
<br>
<div>
	<center>
<img src="Logo1.png" style="width:28%;
height:20%;"></img></div>
<h3 align="center" id="font">Login here</h3><br>
<br>
<table>
<tr><td><h3>User Id</h3></td><td></td></tr>
<tr><td><input type="text" placeholder="   User ID" id="u"  style="width:250px;height:30px;border:1px solid black;border-radius:3px;font-size:14px;background-color:white;color:black" name="email"/></td></tr>
<tr><td><br></td></tr>
<tr><td><h3>Password</h3></td><td></td></tr>
<tr><td><input type="Password" placeholder="   ********" id="p" style="width:250px;height:30px;border:1px solid black;border-radius:3px;font-size:15px;background-color:white;padding-top:5px;color:black" name="password"/></td></tr>
</table>
<br><br>
<input type="submit" value="Login"  name="submit" />
</fieldset>
</form>
<?php
if(isset($_POST['submit']))
{ 
$con=new mysqli("localhost","root","","staffmanagement");
$db=mysqli_select_db($con,"staffmanagement");
$query="select  *from admin";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run))
{
  if($row['USER']==$_POST['email'])
  {
	if($row['PASSWORD']==$_POST['password'])
	{
	echo "login sucessful";
	header("location:admin.php");
	}
	else
	{
	echo '<script>alert ("Wrong Password")</script>';
	}
  }
  else
 {
    echo '<script>alert ("Wrong User id")</script>';
  }
}
}
?>
</body>
</html>