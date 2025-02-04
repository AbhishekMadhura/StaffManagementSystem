<?php
    	session_start();
	$con=new mysqli("localhost","root","","staffmanagement");
	$db=mysqli_select_db($con,"staffmanagement");
?>
<?php
                
                $con=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($con,"staffmanagement");
                $query="select * from tblemployees where emp_id = '$_SESSION[email]'";	
                $query_run=mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($query_run)) {
                 
                                    
		                         ?>	
<html>
    <head>
        <style>
            body
{   
    background-color:#f7fbff;
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
.logout{
   position:fixed;
   right:5px;  
   top:1px;
}
.logout a
{
       width: 75px;
       height: 18px;
       text-decoration: none;
       text-align: center;
       display:inline-block;
       margin: 10px;
       padding:4px;
       padding-top:5px;
       font-size:14px;
       color: #fff;
       border:2px solid #fff;
       border-radius:15px ;
       font-family: sans-serif;
       background-color: transparent; 
       }
.logout a:hover{
       width: 75px;
       height: 18px;
       text-decoration: none;
       text-align: center;
       display:inline-block;
       margin: 10px;
       padding-top:5px;
       font-size:14px;
       color: black;
       border:2px solid #fff;
       border-radius:15px ;
       font-family: sans-serif;
       background-color: white;

}
.mainbox{
    position:fixed;
    left:33%;  
    top:5%;
 }
 .mainbox h1{
    color:#5C078D;  
    font-family:Britannic;
    font-size:50px;
 }
 .inputbox a
{
   width: 290px;
   height: 25px;
   text-decoration: none;
   text-align: center;
   display:inline-block;
   margin: 10px;
   padding-top:7px;
   font-size:14px;
   color: #fff;
   border:2px solid rgb(0,120,255);
   border-radius:2px ;
   font-family:Ebrima;
   background-color: rgb(0,120,255);
   box-shadow: 0 0 28px rgba(0,0,0,.08);  
}
.inputbox a:hover{
   width: 290px;
   height: 25px;
   text-decoration: none;
   text-align: center;
   display:inline-block;
   margin: 10px;
   padding-top:7px;
   font-size:15px;
   color: #fff;
   border:2px solid #5D09B0   ;
   border-radius:2px ;
   background-color:#5D09B0;
   font-family:Ebrima;
}
.wel{
    position:absolute;
    left:1%;  
    top:10%;
}
.box{
    background:white;
    position:absolute;
    left:5%;  
    top:25%;
    width:20%;
    height:30%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    border-radius:10px ; 
    transition: 0.3s;
}
.box img{
width:70%;
height:65%;
position:absolute;
left:16%;  
top:7%;
}
.box h3{
position:absolute;
left:16%;  
top:65%;
font-family: sans-serif;
}
.box:hover{
    box-shadow: 0 0 28px rgba(0,0,0,.30);
    top:24%;
}
.box2{
    background:white;
    position:absolute;
    left:37%;  
    top:25%;
    width:20%;
    height:30%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    border-radius:10px ;
    transition: 0.3s; 
}
.box2:hover{
    box-shadow: 0 0 28px rgba(0,0,0,.30);
    top:24%;
}
.box3{
    background:white;
    position:absolute;
    left:70%;  
    top:25%;
    width:20%;
    height:30%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    border-radius:10px ; 
    transition: 0.3s;
}
.box3 img{
width:80%;
height:75%;
position:absolute;
left:10%;  
top:6%;
}
.box3:hover{    
    box-shadow: 0 0 28px rgba(0,0,0,.30);
    top:24%;
}
.box3 h3{
position:absolute;
left: 25%;  
top:73%;
}
.attload{
width:70%;
height:65%;
position:absolute;
left:9%;  
top:10%;
background-color:white;
border:10px solid rgb(209, 209, 209);
border-radius: 85px ; 
padding: 5px;
}
.attload h1{
position:absolute;
left:7%;  
top:-10%;
font-size:70px;
}
#sidebar
{
position: absolute;
width:35%;
height:55%;
top:13%;
left:-50%;
background-color:white; 
border-radius:5px ;
box-shadow: 0 0 28px rgba(0,0,0,.30);
}
#min-sidebar{
position: absolute;
width:90%;
height: 70%;
top:10%;
left:5%;
border-radius:10px ; 
background-color:rgba(231, 231, 231, 0.326); 
}
#min-sidebar img{
position:absolute;
left:95%;
top: -35px;
width:20px;
height:20px;
padding:5px;
transition: 0.2s;
}
#min-sidebar img:hover{

background-color:rgba(178, 178, 178, 0.405); 
}
#sidebar.active
{
left:1%;
}
.p1
{
color:rgb(0,150,255);
text-align:center;
font-size:30px;
left:35px;
top:35px;
}
 table tr td{
    padding-left:25px;
    font-size:16px;
 }
 .loadbox{
position: relative;
top: 7%;
left:12%;
 }
 .loadbox .percent svg
{
position: relative;
width: 150px;
height: 150px;
}
.loadbox .percent svg circle
{
width: 150px;
height: 150px; fill: none;
stroke-width: 10;
stroke: #000;
transform: translate(5px,5p);
}
.loadbox .percent .number 
{
position: absolute;
top: 0;
Left: 0;
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
color: #111;
}
.loadbox .percent .number h2
 {
font-size: 48px;
}
.text h3
{
position:absolute;
left:1%;  
top:93%;
font-size:18px;
font-family: sans-serif;
}
.loadbox .percent .number h2 span
{
font-size: 24px;
}
.loadbox .percent svg circle
{
width: 150px;
height: 150px; fill: none;
stroke-width: 10;
stroke: #000;
transform: translate(5px,5px);
stroke-dasharray: 440;
stroke-dashoffset: 440;
}
.loadbox .percent .number
{
width: 150px;
height: 150px;
fill: none;
stroke-width: 10;
stroke: #000;
transform: translate(5px,5px);
stroke-dasharray: 440;
stroke-dashoffset: 440;
stroke-linecap: round;
}
.loadbox .percent svg circle:nth-child(1)
{
stroke-dashoffset: 0;
stroke: #f3f3f3;
}
.loadbox .percent svg circle:nth-child(2)
{
stroke-dashoffset: calc(440 - (440*<?php echo $row['attendence']; ?>)/100);
stroke: #03a9f4;
}
#sidebara
{
position: absolute;
width:35%;
height:auto;
top:10%;
left:-100%;
background-color:white; 
border-radius:3px;
box-shadow: 0 0 28px rgba(0,0,0,.30);
}
#sidebara.activea
{
left:63%;
}
.imga{
position:absolute;
left:90%;
top:5px;
width:20px;
height:20px;
padding:5px;
transition: 0.2s;
}
.imga:hover{

background-color:rgba(178, 178, 178, 0.405); 
}
.staffn{
position:absolute;
left: 110%;
top: 11%;
}
.staffn h2{
color:blue;
font-family: sans-serif;
}
#sidebara #mail-box table{
padding:10px;
}
#sidebara #mail-box table tr{
    border-bottom:1px solid #D5D5D5;
}
#sidebara #mail-box table tr td{
width:19%;
padding-left:5px;  
padding-bottom:5px;
height:10%;
font-size:14px;
text-align:left;
padding-top:0px;
border-bottom:1px solid #D5D5D5;
font-family: sans-serif;
}
#sidebara #mail-box .notifi{
position:absolute;
left:1%;
top:-5%;
}
table tr td{
    font-family:Times New Roman;
}
            </style>
<script type="text/javascript">
function togglemenu()
{
document.getElementById('sidebar').classList.toggle('active');
}
function togglemenua()
{
document.getElementById('sidebara').classList.toggle('activea');
}
</script>
            </head>
            <body>
            <body id="banner">
            <div id="topbar">
<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-5px;left:5px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM
<div class="logout">
<a href="staff login.php">Home</a> 
  <a href="staff login.php">Logout</a>    
</div></div></div>
<div class="wel">
<div class="staffn" ><h2><?php echo $row['FirstName'],$row['LastName']; ?></h2></div> 
<h1 style=" text-transform: uppercase;font-family: sans-serif;">Welcome</h1>
</div>
<div class="box"  onclick="togglemenu()">
<img src="Nstaff.png" ></img>
<h3>View Your Profile</h3>  
</div>
</div>
<div id="sidebar">
    <div id="min-sidebar" >
<p style="padding-top:10px">
<div onclick="togglemenu()">
<img src="close.png" />
</div>
<p style="padding-top:0px"></p>
<table>                          
   <tr><td>Full Name</td><td>:  <?php echo $row['FirstName'] . " " . $row['LastName']; ?></td></tr>
    <tr><td>Email Id</td><td>:  <?php echo $row['EmailId']; ?></td></tr>
    <tr><td>Gender</td><td>:  <?php echo $row['Gender']; ?></td></tr>
    <tr><td>Phone No</td><td>:  <?php echo $row['Phonenumber']; ?></td></tr>
    <tr><td>Department</td><td>:  <?php echo $row['Department']; ?></td></tr>
    <tr><td>Role</td><td>:  <?php echo $row['role']; ?></td></tr>
    <tr><td>Address</td><td>:  <?php echo $row['Address']; ?></td></tr>
    <tr><td>Attendance</td><td>:  <?php echo $row['attendence']; ?><span>%</span></td></tr> 
</table>
</div>
</div>
<div class="box2">
    <div class="loadbox">
<div class="percent">
<svg>
<circle cx="70" cy="70" r="70"></circle>
<circle cx="70" cy="70" r="70"></circle>
</svg>
<div class="number">
<h2><?php echo $row['attendence']; ?><span>%</span></h2>
<?php } ?>
</div>
<div class="text">
<h3>Your Attendence(%)</h3> 
</div>
</div>
</div>
</div>
</div>
<div class="box3"  onclick="togglemenua()">
<img src="Mali.png" ></img>
<h3>Notifications</h3> 
</div>
<div id="sidebara">
<p style="padding-top:10px">
<div onclick="togglemenua()">
<img src="close.png" class="imga" />
<?php	  
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
    $query = mysqli_query($con,"select * from Notifications")or die(mysqli_error());	
    while ($row = mysqli_fetch_array($query)){
      $mail = $row['mail'];
    
		?>
        <div id="mail-box">  
        <table>
            <tr><td><?php echo $row['mail']; ?></td></tr>
    </table>
    <?php } ?>
    <div class="notifi">
            <u style="color:rgb(79, 0, 153);"><h2 style="padding-left:20px;color:rgb(79, 0, 153)">Notifications</h2></u>
    </div>
    <p style="padding-top:0px"></p>
    </div>
</div>
</div>
</body>
</html>