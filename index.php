    <?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="mainpage.css" >
<style>
body
{
  background-image:white;
 } 
.close-btn{
position:absolute;
right:3%;
top:3%;
width:15px;
height:15px;
padding:7px;
border-radius:30px;
transition: 0.3s; 
}
.close-btn:hover{
    background-color:rgba(231, 231, 231, 0.400);
}
.img-admin{
    width: 16%;
    height: 20%;
    padding-left:30px;
    transition: 0.3s;
    padding-bottom :10px;
}
.line{
    position:absolute;
    left:49%;
    top: 27%;
    width:1px;
    height:20%;
    background-color:black;
}
#topbar
{
position:absolute;
top:0px;
left:0px;
background-color: rgb(0,120,255);
width:100%;
height:7%;
box-shadow: 0 0 28px rgba(0,0,0,.08);
}
.head
{
font-size:25px;
text-align:center;
color:white;
font-family:Imprint MT Shadow;
padding-top:10px;
}
#font
{
margin: 0;
padding: 0;
font-family: sans-serif;
 }
.banner-btn
{
margin:0px auto 0;
}
.banner-btn a
{
width: 110px;
text-decoration: none;
display:inline-block;
margin: 10px;
padding: 5px;
font-size:12px;
color:black;
border:2px solid black;
text-transform: uppercase;
font-family: sans-serif;
background-color:#fff;
}
.loginlogo
{
position:absolute;
top:12px;
right:25px;
}
#sidebar
{
position:fixed;
box-shadow: 0 0 28px rgba(0,0,0,.08);
width:15%;
height:20%;
right:-30%;
border:2px solid white;
border-radius:10px;
padding:20px;
top:10%;
background-color:white;
}
#sidebar.active
{
right:3%;
}
#btn
{
display:block;
position:absolute;
left:30%;
top:75%;
}
input
{
text-decoration: none;
border:1px solid black;
font-size:15px;
padding-bottom:1px;
padding:5px;
text-align:center;
border-radius:30px;
width:100%;
height:20%;
background:none;
color:black;
 }
#a:hover{
background:(0,150,255);
}
a:hover{
color:rgb(0,150,255);
}	
input[type="submit"]:hover{
background:rgb(0,150,255);
color:white;	
}
input.signup
{
background-color:rgb(0,150,255);
width:90px;
height:30px;
border:0px solid white;
border-radius:35px;
font-size:12px;
padding:2px;
color:white;
}
input.button2
{
    width:15%;
    height:15%;
    font-size:15px;
    color:black;
    border:1px solid white;
    border-radius:30px;
    text-align:center;
    display:block;
    position:absolute;
    right:2%;
    top:1%;
    font-family: sans-serif;
}
input.button2[type="button"]:hover{
    background-color:#F0F0F0;
}
.admin-text{
    position:absolute;
    left:33%;
    top: 45%;
}
.staff-text{
    position:absolute;
    right:35%;
    top: 45%;
}
 </style>
<script type="text/javascript">
function togglemenu()
{
document.getElementById('sidebar').classList.toggle('active');
}
function admin()
{
window.location="adminlogin.php";		
}
function staff()
{
window.location="staff login.php";		
}
</script>
<head>
<body>	
<div id="topbar">
    <div>
        <img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;"></img><div class="head">STAFF MANAGEMENT SYSTEM</div>
</div></div><hr><br>
<div class="loginlogo" onclick="togglemenu()">
<input type="button" value="Sign Up" class="signup"></button>
</div>
<div id="sidebar">
<center>
<img src="Logo1.png" style="width:50%;
height:53%;"></img>
<div onclick="togglemenu()">
<img src="close.png" class="close-btn" />
</div>
<div><input type="submit" value="admin" style="text-transform: uppercase;" onclick="admin()" ></input></div><br>
<div><input type="submit" value="staff" style="text-transform: uppercase;" onclick="staff()" ></input></div>
</center>
</div>
<form>
</div>
<center>
    <p style="padding-top:100px;" />
<div>
<a href="Adminlogin.php" ><img src="admin2.png" class="img-admin" /></a>
<a href="staff login.php" >	<img src="staff.png" style="width:25%;height:25%;padding-left:10px;" /></a>
</div>
</form>
</center>
<div class="line">
</div>
<div class="admin-text" >
    <h3>Admin Login</h3>
</div>
<div class="Staff-text" >
    <h3>Staff Login</h3>
</div>
</body>
</html>
