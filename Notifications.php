
<?php
	if(isset($_POST['submit']))
	{
        if($_POST['mail']=='')
        	{
                ?>
            <script>alert('Enter Any Message');</script>
           <?php }
            else{
	$date=$_POST['date'];
	$mail=$_POST['mail'];   
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"staffmanagement");
	 $query = mysqli_query($con,"select * from Notifications")or die(mysqli_error());
	 $count = mysqli_num_rows($query);
     $query1="INSERT INTO Notifications(date,mail) VALUES('$date','$mail')"; 
		mysqli_query($con,$query1); ?>
		<script>alert(' Notification Sent Sucessfully');</script>;
		<script>
		window.location = "admin.php"; 
		</script>
		<?php   }
    }

?>
<html>
    <head>    
        <style>
body
{
    padding:0px;
    margin:0px;
    background-color:#f7fbff;
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
padding-bottom:30px;
}
.staff-box h2{
    text-transform: uppercase;
    padding-left:20px;
	padding-bottom:25px;
    border-bottom:1px solid #D5D5D5;
}
.text-box{
    padding-left:50px;
}
input{
    padding-left:20px;
    padding-right:20px;
    padding-top:5px;
    padding-bottom:5px;
    position: absolute;
    top:93%;
    right:17%;
    border:solid white;
    border-radius:3px;
    background-color:rgb(0, 6, 117);
    color:white;
    font-family: sans-serif;
    text-transform:uppercase;
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
            <div id="topbar">
<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-4px;left:3px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM</div>
<div id="menubar">
<a href="admin.php" >Home</a>
<a href="adminlogin.php" >logout</a>
</div>
</div>
</div>	
<div class="staff-box" >
    <h2>Send Notification To Staff Members</h2>
    <div class="text-box" >
        <form action="" method="POST" >
    <textarea name="mail" rows="25" cols="100">
</textarea>
<br>
<br>
<input type="submit" name="submit" value="Send" />
</form>
</div>
</div>
</body>
</html>