
<?php
	if(isset($_POST['add_staff']))
	{
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];   
	$email=$_POST['email']; 
	$password=md5($_POST['password']); 
	$gender=$_POST['gender']; 
	$dob=$_POST['dob']; 
	$department=$_POST['department']; 
	$address=$_POST['address'];  
	$empid=$_POST['empid'];
	$user_role=$_POST['user_role']; 
	$phonenumber=$_POST['phonenumber']; 
	$status=1;
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
	 $query = mysqli_query($con,"select * from tblemployees where EmailId = '$email'")or die(mysqli_error());
	 $count = mysqli_num_rows($query);
     
     if ($count > 0){ ?>
	 <script>
	 alert('Data Already Exist');
	</script>
	<?php
      }else{
        $query1="INSERT INTO tblemployees(emp_id,FirstName,LastName,EmailId,Password,Gender,Dob,Department,Address,role,Phonenumber,Status) VALUES('$empid','$fname','$lname','$email','$password','$gender','$dob','$department','$address','$user_role','$phonenumber','$status')";
		mysqli_query($con,$query1); ?>
		<script>alert('Staff Records Successfully  Added');</script>;
		<script>
		window.location = "admin.php"; 
		</script>
		<?php   }
}

?>

<HTML>
<head>
<link rel="stylesheet" type="text/css" href="core.css">
<style>
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
    text-align:center;
    color:white;
    font-family:Imprint MT Shadow;
    padding-top:10px;
    }
	#menubar
 {
position:absolute;
right:1%;
top:12px;
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
	<div id="topbar">
	<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-5px;left:3px;"></img>
	<div class="head">STAFF MANAGEMENT SYSTEM</div>
	<div id="menubar">
<a href="admin.php" >Home</a>
<a href="adminlogin.php" >Logout</a>
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
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >First Name :</label>
											<input name="firstname" type="text" class="form-control wizard-required" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Last Name :</label>
											<input name="lastname" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Email Address :</label>
											<input name="email" type="email" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Password :</label>
											<input name="password" type="TEXT" placeholder="**********" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Gender :</label>
											<select name="gender" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Phone Number :</label>
											<input name="phonenumber" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Date Of Birth :</label>
											<input name="dob" type="date" class="form-control date-picker" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Address :</label>
											<input name="address" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Department :</label>
											<select name="department" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Department</option>
												<option value="CSE">CSE</option>
												<option value="MECH">MECH</option>
												<option value="ECE">ECE</option>
												<option value="CIVIL">CIVIL</option>
												<option value="EEE">EEE</option>
													<?php
													$query = mysqli_query($conn,"select * from tbldepartments");
													while($row = mysqli_fetch_array($query)){
													
													?>
													<option value="<?php echo $row['DepartmentShortName']; ?>"><?php echo $row['DepartmentName']; ?></option>
													<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Staff ID :</label>
											<input name="empid" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
								
									
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>User Role :</label>
											<select name="user_role" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Role</option>
												<option value="HOD">HOD</option>
												<option value="Staff">Staff</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<div class="modal-footer justify-content-center">
												<button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">Add&nbsp;Staff</button>
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
	<!-- js -->
	
</body>
</html>
