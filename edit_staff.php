
<?php $get_id = $_GET['edit']; ?>
<?php
	if(isset($_POST['edit_staff']))
	{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];   
	$empid=$_POST['empid'];
	$email=$_POST['email'];  
	$password=$_POST['password'];
	$gender=$_POST['gender']; 
	$dob=$_POST['dob']; 
	$department=$_POST['department']; 
	$address=$_POST['address'];  
	$user_role=$_POST['user_role']; 
	$phonenumber=$_POST['phonenumber']; 
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
	$result = mysqli_query($con,"update tblemployees set FirstName='$fname', LastName='$lname',emp_id='$empid', EmailId='$email',Password='$password', Gender='$gender', Dob='$dob', Department='$department', Address='$address', role='$user_role', Phonenumber='$phonenumber' where emp_id='$get_id'"); 		
	if ($result) {
     	echo "<script>alert('Record Successfully Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'staffd.php'; </script>";
	} else{
	  die(mysqli_error());
   }
		
}
?>
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
</style>
</head>
<body>
	<div id="topbar"><img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;left:3px;"></img>
	<div class="head">STAFF MANAGEMENT SYSTEM
	<div id="menubar">
<a href="admin.php" >Home</a>
<a href="add_staff.php" >add staff</a>
<a href="adminlogin.php" >logout</a>
</div>
</div>
</div>	
<p style="padding:10px;"></p>
	<div id="main" >
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4"><u>STAFF FORM</u></h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
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
											<label >First Name :</label>
											<input name="firstname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="<?php echo $row['FirstName']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Last Name :</label>
											<input name="lastname" type="text" class="form-control" required="true" autocomplete="off" value="<?php echo $row['LastName']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Email Address :</label>
											<input name="email" type="email" class="form-control" required="true" autocomplete="off" value="<?php echo $row['EmailId']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Password :</label>
											<input name="password" type="text" placeholder="**********" class="form-control" required="true" autocomplete="off" value="<?php echo $row['Password']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Gender :</label>
											<select name="gender" class="custom-select form-control" required="true" autocomplete="off">
												
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Phone Number :</label>
											<input name="phonenumber" type="text" class="form-control" required="true" autocomplete="off" value="<?php echo $row['Phonenumber']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Date Of Birth :</label>
											<input name="dob" type="date" class="form-control date-picker" required="true" autocomplete="off" value="<?php echo $row['Dob']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Address :</label>
											<input name="address" type="text" class="form-control" required="true" autocomplete="off" value="<?php echo $row['Address']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
										<?php
									$query = mysqli_query($con,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$new_row = mysqli_fetch_array($query);
									?>
											<label>Department :</label>
											<select name="department" class="custom-select form-control" required="true" autocomplete="off">
											<option value="<?php echo $new_row['Department']; ?>"><?php echo $new_row['Department']; ?></option>
											    <option value="CSE">CSE</option>
												<option value="MECH">MECH</option>
												<option value="ECE">ECE</option>
												<option value="CIVIL">CIVIL</option>
												<option value="EEE">EEE</option>
							</select>
										</div>
									</div>
								</div>
                                <?php
									$query = mysqli_query($con,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$new_row = mysqli_fetch_array($query);
									?>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Staff ID :</label>
											<input name="empid" type="text" class="form-control" required="true" autocomplete="off" value="<?php echo $row['emp_id']; ?>">
										</div>
									</div>			
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>User Role :</label>
											<select name="user_role" class="custom-select form-control" required="true" autocomplete="off">
											<option value="<?php echo $new_row['role']; ?>"><?php echo $new_row['role']; ?></option>
												<option value="HOD">HOD</option>
												<option value="Staff">Staff</option>
												</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<div class="modal-footer justify-content-center">
												<button class="btn btn-primary" name="edit_staff" id="edits_staff" data-toggle="modal">Update&nbsp;Staff</button>
												</div>
										</div>
									</div>
									</div>
								</div>
                                </section>
						</form>
					</div>
				</div>
			</div>		
		</div>
</div>
</div>
	<!-- js -->
</body>
</html>
