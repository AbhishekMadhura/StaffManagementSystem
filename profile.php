
<?php $get_id = $_GET['profile']; ?>
<?php
	if(isset($_POST['profile']))
	{
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];   
	$email=$_POST['email'];  
	$gender=$_POST['gender']; 
	$dob=$_POST['dob']; 
	$department=$_POST['department']; 
	$address=$_POST['address'];  
	$user_role=$_POST['user_role']; 
	$phonenumber=$_POST['phonenumber']; 
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
	$result = mysqli_query($con,"update tblemployees set FirstName='$fname', LastName='$lname', EmailId='$email', Gender='$gender', Dob='$dob', Department='$department', Address='$address', role='$user_role', Phonenumber='$phonenumber' where emp_id='$get_id'"); 		
	if ($result) {
     	echo "<script>alert('Record Successfully Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'staff.php'; </script>";
	} else{
	  die(mysqli_error());
   }
		
}

?>
<html>
    <head>
        <style>
            body{
                padding:0px;
                margin:0px;
            }
            #topbar
    {
    position:absolute;
    top:0px;
    background-color:#72a3e7;
    width:100%;
    height:7%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    }
    .head
    {
    position:absolute;
    font-size:25px;
    text-align:center;
    padding-left:250px;
    color:white;
    font-family:Imprint MT Shadow;
    padding-top:10px;
    }
 #menubar
 {
position:absolute;
right:0%;
top:15px;
 }
 #menubar a{
 text-decoration: none;
 color: black;
 font-size:12px;
 text-align:center;
 text-transform: uppercase;
 padding:7px;
 margin:10px;
 color:white;
 border-radius:3px;
 font-family: sans-serif;
 background-color:#ffffff8b;
 color:black;
}
#menubar a:hover{
 background-color:white	;
 color:black;
}
.main-box{
position:absolute;
left:20px;
top:10%;
}
input:hover{
    border:1px solid rgb(121, 160, 209);
    box-shadow: 0 0 7px rgb(121, 160, 209);
}
.profile{
position:absolute;
left:20px;
top:13%;
width:100px;
height:100px;
background-color:white;
border-radius:50px;
box-shadow: 0 0 28px rgba(0,0,0,.15);
}
.profile img{
position:absolute;
right:-16px;
top: -9px;
width: 130px;
height: 130px;
}
table tr td{
padding-right:5px;
padding-left:5px;
}
.staff-box{
position:absolute;
left:10px;
top: 27%;
}
</style>
</head>
<body>
<div id="topbar"><img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;left:3px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM</div>
<div id="menubar">
<a href="admin.php" >Home</a>
<a href="adminlogin.php" >logout</a>
</div>
</div>
<div class="profile">
<img src="logo1.png" />
</div>
<p style="padding-top:100px;"></p>
<div class="staff-box">
<form method="post" action=" ">	
<h2>Staff Profile</h2>
<table>
<?php
                            $con=mysqli_connect("localhost","root","");
                            $db=mysqli_select_db($con,"staffmanagement");
									$query = mysqli_query($con,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
                                    $a=array($row['FirstName']);
									?>
   <tr><td>Full Name</td><td>:   <?php echo $row['FirstName'] . " " . $row['LastName']; ?></td></tr>
    <tr><td>Email Id</td><td>:   <?php echo $row['EmailId']; ?></td></tr>
    <tr><td>Gender</td><td>:   <?php echo $row['Gender']; ?></td></tr>
    <tr><td>Phone No</td><td>:   <?php echo $row['Phonenumber']; ?></td></tr>
    <tr><td>Department</td><td>:   <?php echo $row['Department']; ?></td></tr>
    <tr><td>Role</td><td>:   <?php echo $row['role']; ?></td></tr>
    <tr><td>Address</td><td>:   <?php echo $row['Address']; ?></td></tr>
    <tr><td>Attendance</td><td>:   <?php echo $row['attendence']; ?><span>%</span></td></tr> 
</table>
</from>
</div>
</div>
     </body>
     </html>
     <?php 
   