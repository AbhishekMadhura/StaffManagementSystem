<?php $get_id = $_GET['edit']; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="core.css">
<style>
	body{
		padding:0px;
		margin:0px;
	}
#main{
    padding-left:20px;
}	
#topbar
    {
    top:0px;
    background-color:#72a3e7;
    width:100%;
    height:7%;
    box-shadow: 0 0 28px rgba(0,0,0,.08);
    }
    .head
    {
    font-size:25px;
    text-align:left;
    padding-left:250px;
    color:white;
    font-family:Imprint MT Shadow;
    padding-top:10px;
    }
	#menubar
 {
position:fixed;
right:1%;
top:5px;
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
#btn{
position:fixed;
left:1%;
top:23%;
}
</style>
<script type="text/javascript">
function update_salary()
{
	<?php
                            $con=mysqli_connect("localhost","root","");
                            $db=mysqli_select_db($con,"staffmanagement");
									$query = mysqli_query($con,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
if(70 >=<?php echo $row['attendence']; ?> )
{
alert("Your attendence is below 70%");
windows.location="edit_salary.php";
}
else
{
alert("Salary Updating...");
<?php
	if(isset($_POST['edit_salary']))
	{
	$salary1=$_POST['salary'];
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
	$result = mysqli_query($con,"update tblemployees set salary='$salary1' where emp_id='$get_id' and attendence>=70 "); 		
	if ($result) {
     	echo "<script>alert('Record Successfully Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'salary.php'; </script>";
	} else{
	  die(mysqli_error());
   }
		
}
?>
}
}
</script>
</head>
<body>

	<div id="topbar"><img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;left:3px;"></img>
	<div class="head">STAFF MANAGEMENT SYSTEM
	<div id="menubar">
<a href="admin.php" >Home</a>
<a href="adminlogin.php" >logout</a>
</div>
</div>
</div>	
<p style="padding:10px;"></p>
<div id="main">
<form method="post" action="">
							<section>
                            <?php
                            $con=mysqli_connect("localhost","root","");
                            $db=mysqli_select_db($con,"staffmanagement");
									$query = mysqli_query($con,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
                                    <div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >New Salary :</label>
											<input name="salary" type="text" class="form-control wizard-required" required="true" autocomplete="off">
										</div>
									</div>
									<div id="btn">
                                    <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<button class="btn btn-primary" name="edit_salary" id="edit_salary" data-toggle="modal" onclick="update_salary()" >Update&nbsp;Salary</button>
												</div>
										</div>
									</div>
</div>
</div>
</body>
</html>       