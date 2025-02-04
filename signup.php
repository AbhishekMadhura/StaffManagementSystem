<?php
session_start();
?>
<html>           
<head>
<title>Sign up</title>
<style>
    body{
        padding:0px;
        margin:0px;
    }
    #topbar
    {
    top:0px;
    background-color:#72a3e7;
    width:100%;
    height:8%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    }
    .head
    {
    font-size:30px;
    text-align:center;
    color:white;
    font-family:Imprint MT Shadow;
    padding-top:10px;
    }
#banner
{
background-image:url(Bg3.jpg);
background-size: cover;
background-position: center;
 } 
#font
{
color:white;
}
#font2
{
color:white;
font-family:Britannic;	
}
#subtitle
{
    position:absolute;
    left:29%;
    top: 5%;
}
#subtitle h1
{
    color:white;
    font-family:Franklin Gothic Heavy   ;
}
#subtitle p
{
    color:#F0F0F0;
    font-family:Franklin Gothic Book;
}
input.submit{
    border-radius:2px;
    height:25px;
    background-color:rgb(0,150,255);
    color:white;
    width:100%;
    height:25px;
    border:2px;
    border-radius:1px;
}
input:hover{
background:(0,170,255);
}
input[type="submit"]:hover{
background:rgb(0,120,255);	
}
input[type="reset"]:hover{
background:rgb(0,120,255);	
}
input[type="text"]
    {
    width: 100%;
    padding:5px 0;
    font-size: 16px;
    color: #000;
    border: none;
    outline:none;
    background: transparent;
    margin-bottom: 0px;
    border-bottom: 2px solid rgb(0, 121, 146);
    transition: 0.3s;
    }
    input[type="text"]:focus
    {
    border-bottom: 2px solid rgb(0, 213, 255);
    }
    input[type="password"]
    {
    width: 100%;
    padding:5px 0;
    font-size: 16px;
    color: #000;
    border: none;
    outline:none;
    background: transparent;
    margin-bottom: 0px;
    border-bottom: 2px solid rgb(0, 121, 146);
    }
    input[type="password"]:focus
    {
    border-bottom: 2px solid rgb(0, 213, 255);
    }
    #sidebar
{
position: absolute;
width:20%;
height:100%;
left:-30%;
background-color:#02072a; 
}
#sidebar li
{
color:white;
font-size:15px;
padding:10px;
border-bottom:1px solid gray;
text-align:center;
}
.toggle
{
position:absolute;
top: 12px;
left:15px;
}
.toggle span
{
display:block;
background-color:white;
width:25px;
height:5px;
margin:3px;
}
#sidebar.active
{
left:0;
}
.p1
{
color:rgb(0,150,255);
text-align:center;
font-size:30px;
left:35px;
top:35px;
}
#sidebar ul li 
{ 
list-style: none;
 }
ul li:hover
{
background:rgb(0,150,255);
}
#sidebar ul li a
 {
    text-align:center;
 text-decoration: none;
 color: #fff;
 text-transform: uppercase;
 }
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
 </style>
</head>
<script type="text/javascript">
function create_account()
{
var n=document.getElementById("n1").value;
var e=document.getElementById("e1").value;
var p=document.getElementById("p1").value;
var cp=document.getElementById("p2").value;
if(n==''||e==''||p==''||cp=='')
{
alert("Enter Each Details correctly");
}
else if(p!=cp)
{
alert("Password not matching");
}
else if(document.getElementById("p1").value.length<6)
{
alert("Password minimum length is 6");
}
else
{
alert("Account created Sucessfully");
windows.location="staff login.php";
}
}
</script>
<script type="text/javascript">
function togglemenu()
{
document.getElementById('sidebar').classList.toggle('active');
}
</script>
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
<img src="close2.png" id="btn2" />
</div>
<ul id="font">
<li><a href="index.php">Home</a></li>
<li><a href="Adminlogin.php">Admin Login</a></li>
<li><a href="staff login.php">Staff Login</a></li>
</ul>
</div>
<p style="padding-top:50px;" />
<div id="subtitle" style="padding-top:20px;">
<h1>Register</h1>
<p>Fill Details To Create Your Account,  Register Now<p> 
</div>
<center>
<form method="POST" action=""><br><br><br>
<fieldset style="width:40%;border:2px solid white"><br>
<legend id="font2">CREATE YOUR ACCOUNT</legend>
<p style="padding:10px">
<table>
<tr><td id="font">First Name</td><td></td></tr>
<tr><td><input type="text" placeholder="Enter First Name" id="n1" name="fname">
</td><tr>
<tr><td><br></td></tr>
<tr><td id="font">Last Name</td><td></td></tr>
<tr><td><input type="text" placeholder="Enter Last Name" id="n1" name="lname">
</td><tr>
<tr><td><br></td></tr>
<tr><td id="font">User ID</td><td></td>	
<tr><td><input type="text" placeholder="Set User Id" id="e1" name="user">
</td></tr>
<tr><td><br></td></tr>
<tr><td id="font">Set password</td><td></td></tr>
<tr><td><input type="password" placeholder="Create your password" id="p1" name="pass"></td></tr>
<tr><td><br></td></tr>
<tr><td id="font">Conform password</td><td></td></tr>
<tr><td><input type="password" placeholder="Conform your password" id="p2" name="cpass">
</td></tr>
<tr><td><br></td></tr>
<tr><td><input type="submit" value="Create" onClick="create_account()" class="submit" name="submit"/></td></tr>
<tr><td><br></td></tr>
<tr><td><input type="reset" value="Reset" class="submit" /></td></tr>
</table><br></center>
</fieldset>
</form>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","");
$sel=mysqli_select_db($con,"staffmanagement");
if($_POST['fname']==''||$_POST['lname']==''||$_POST['user']==''||$_POST['pass']==''||$_POST['cpass']=='')
{

}
else
{
if($_POST['pass']==$_POST['cpass'])
{
$FirstName=$_POST['fname'];
$LastName=$_POST['lname'];
$emp_id=$_POST['user'];
$Password=$_POST['pass'];
$pass=$_POST['cpass'];
$query="INSERT INTO tblemployees(FirstName,LastName,emp_id,Password,pass) VALUES ('$FirstName','$LastName','$emp_id','$Password','$pass')";
mysqli_query($con,$query);
}
}
}
?>
</body>
</html>
		