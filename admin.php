<html>
    <head>
        <style>
body
{
  background-image: linear-gradient(to bottom right, white,#95CDFE,white);
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
   transition: 0.2s;
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
        </style>
</head>
<body>
<div id="topbar">
<img src="smslogo.png" style="width:60px;height:60px;position:absolute;top:-5px;left:5px;"></img>
<div class="head">STAFF MANAGEMENT SYSTEM
<div class="logout">
<a href="admin.php">Home</a> 
  <a href="adminlogin.php">Logout</a>    
</div></div></div>
    <div  class="mainbox">
        <h1>Welcome Admin</h1>
        <div class="inputbox">
        <form>
        <table>
        <tr><td><a href="add_staff.php" >Add New Staff</a></td></tr>
        <tr><td><br></td></tr>
        <tr><td><a href="staffd.php" >Manage Staff</a></td></tr>
        <tr><td><br></td></tr>
        <tr><td><a href="staffa.php" >Staff Attendance Details</a></td></tr>
          <tr><td><br></td></tr>
        <tr><td><a href="salary.php" >Prepare Monthly Salary</a></td></tr>
        <tr><td><br></td></tr>
        <tr><td><a href="Notifications.php" >Send Notification</a></td></tr>
        <tr><td><br></td></tr>
        <tr><td><a href="Mnotifications.php" >Notifications</a></td></tr>
       </form>
</div>
</div>
</body>
</html>




