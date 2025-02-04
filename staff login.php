<?php
session_start();
?>
<html>
<head>
<title>Login form</title>
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="stafflogin.css" >
<script type="text/javascript">
function togglemenu()
{
document.getElementById('sidebar').classList.toggle('active');
}
function create()
{
window.location="signup.php";		
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
<p style="padding-top:0px"></p>
<li><a href="index.php">Home</a></li>
<li><a href="Adminlogin.php">Admin Login</a></li>
<li><a href="staff login.php">Staff Login</a></li>
<li><a href="signup.php">Register</a></li>
</ul>
</div>
<p style="padding: 80px;" />
<div id="adminlogo">
	<img src="staff.png" style="width: 60%;
height: 50%; />
</div>
<p style="padding:10px">	
<br>
<div id="loginbar">
	<center>
		<div>
<img src="Logo1.png" style="width:28%;
height:20%;"></img></div>
<h3 align="center" id="font">Login here</h3><br>
<br>
<form onsubmit="submit_form()" action="" method="POST">
<table cellspacing="2" align="center" cellpadding="8" border="0">
<tr><td><h4>User Id</h4></td><tr> 
<tr><td><input type="text" placeholder="  User ID" id="u"  name="email" id="u"  style="width:250px;height:30px;border:1px solid black;border-radius:3px;font-size:14px;background-color:white;color:black;"/></td></tr>
<tr><td><br></td></tr>
<tr><td><h4>Password</h4></td></tr>
<tr><td><input type="Password" placeholder="    ********" id="p" name="password"  style="width:250px;height:30px;border:1px solid black;border-radius:3px;font-size:14px;background-color:white;padding-top:6px;color:black;"/></td></tr>
</table><br><br><BR><BR>
<input type="submit" value="Login" name="submit"/>
<input type="button" value="Sign up" onClick="create()" /><br><br>
</form>
</div>
<?php
if(isset($_POST['submit']))
{ 
$con=new mysqli("localhost","root","","staffmanagement");
$db=mysqli_select_db($con,"staffmanagement");
$query="select  *from tblemployees";
$query_run=mysqli_query($con,$query);
if($_POST['email']==''||$_POST['password']=='')
{
echo '<script>alert ("Enter Each Details")</script>';
}
else
{
while($row=mysqli_fetch_assoc($query_run))
{
  if($row['emp_id']==$_POST['email'])
  {
	echo '<script>alert ("INVALID USER_ID")</script>';
	if($row['Password']==$_POST['password'])
	{
		$_SESSION['email']= $row['emp_id'];
	echo '<script>alert ("LOGIN Sucessfully")</script>';
	header("location:staffview.php");
	}
	else
	{
	echo '<script>alert ("Wrong password")</script>';
	}
  }
  else
 {
  
  }
}
}
}
?>
</body>
</html>



