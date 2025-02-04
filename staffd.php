<?php
if (isset($_GET['delete'])) {
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"staffmanagement");
	$delete = $_GET['delete'];
	$sql = "DELETE FROM tblemployees where emp_id= '$delete'";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>alert('Staff deleted Successfully');</script>";
     	echo "<script type='text/javascript'> document.location = 'staffd.php'; </script>";
		
	}
}

?>
<html>
<head>
<style>
body{
    background-color:#f7fbff;
    padding:0px;
    margin:0px;
}
.staff-box{
position:absolute;;   
width:90%;
left:5%;
top:15%;
background-color:white;
border:1px solid white;
border-radius:10px;
box-shadow: 0 0 28px rgba(0,0,0,.08);
background-color:#fbfdf1;
}
.staff-box h2{
    text-transform: uppercase;
    padding-left:20px;
	padding-bottom:25px;
    border-bottom:1px solid #D5D5D5;
}
table tr{
    border-bottom:1px solid #D5D5D5;
}
table tr th{
width:19%;
padding-left:10px;  
padding-bottom:15px;
height:10%;
font-size:18px;
text-align:left;
padding-top:3px;
text-transform: uppercase;
border-bottom:1px solid #D5D5D5;
font-family: sans-serif;
}
table tr td{
width:19%;
height:auto;
font-size:16px;
text-align:left;
padding-left:10px; 
padding-top:20px;
padding-bottom:20px;
border-bottom:1px solid #D5D5D5;
font-family:Gadugi;	
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
    font-size:25px;
    text-align:center;
    color:white;
    font-family:Imprint MT Shadow;
    padding-top:10px;
    }
 #sidebar a{
 text-decoration: none;
 color: black;
 font-size:18px;
 text-align:center;
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
</style>
</head>
<body id="banner">
<div id="topbar">
<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;left:3px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM</div>
<div id="menubar">
<a href="admin.php" >Home</a>
<a href="add_staff.php" >add staff</a>
<a href="adminlogin.php" >logout</a>
</div>
</div>
</div>	
<div class="staff-box" >
    <h2>All Employees</h2>
<table>
<tr>
<th>Full Name</th>
<th>staff Id</th>
<th>Position</th>
<th>Gender</th>
<th>Department</th>
<th>Action</th>
</tr>
<?php
                            	$con=mysqli_connect("localhost","root","");
                                $db=mysqli_select_db($con,"staffmanagement");
                                    $query = mysqli_query($con,"select * from tblemployees where role != 'Admin' ORDER BY tblemployees.emp_id") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
		                         $id = $row['emp_id'];
		                             ?>

	<tr>
<td class="table-plus">
										<div class="txt">
											<div class="weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
										</div>
									
								</td>
								<td><?php echo $row['emp_id']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo $row['Gender']; ?></td>
	                            <td><?php echo $row['Department']; ?></td>
<td>
	<div id="sidebar">
<a href="edit_staff.php?edit=<?php echo $row['emp_id'];?>" style="color:blue";>Edit</a><br>
<a href="profile.php?profile=<?php echo $row['emp_id'];?>" style="color:Green";>Profile</a><br>
<a href="staffd.php?delete=<?php echo $row['emp_id'];?>" style="color:red";>Delete</a>
								 </div>	
</td>
		</tr>
		 </div>
		<?php } ?>                                     
<table>
</div>
</body>
</html>