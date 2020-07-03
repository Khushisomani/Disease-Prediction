<?php
    session_start();
?>
<html>
<head><title>Profile Details</title>
<style>
ul {
    list-style-type:none;
    margin:0px;
    padding:0px;
    overflow:hidden;
    background-color:rgb(0, 230, 138);
}
li {
    float: left;
}

li a {
    display: block;
    color:white;
    text-align:center;
    padding: 9px;
    text-decoration:none;
}
tr,td{
      color:white;
}
.top-right {
  position: absolute;
  top: 200px;
  left:100px;
  font-size:0px;
  font-family: Georgia, serif;
  color:white;
  right:450px;
}
.box{
      background-color:white;
      width:500px;
      text-align:left;
      padding:20px;
}
.rec{
           width:500px;
           height:30px;
           background-color:white;
           color:black;
           border:1px solid black;
           padding:2px;
} 
</style>
</head>
<body bgcolor=black>
<ul><center>
  <li><font size="5"><a href="profile_details.php"{
    background-color:rgb(80,80,80);
    color:white;
    padding:25px 100px 25px 100px;
}>Profile</a></li>
  <li><a href="s_input.php">Search Disease</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="logout.php">Logout</a></li>  
</center></ul>
<center><p style="color:rgb(0, 230, 138); font-size:35px;"> <u>Profile Details</u> </p>
<div class="box">
   <b>Patient ID</b>
  <div class="rec"> <?php echo  $_SESSION['patient_id'];?> </div>
   <b>Patient Name</b>
  <div class="rec"> <?php echo  $_SESSION['patient_name'];?> </div>
  <b>Gender</b>
  <div class="rec"> <?php echo  $_SESSION['gender'];?> </div>
  <b>Age</b>
  <div class="rec"> <?php echo  $_SESSION['age'];?> </div>
  <b>Blood Group</b>
  <div class="rec"> <?php echo  $_SESSION['blood_group'];?> </div>
  <b>Weight</b>
  <div class="rec"> <?php echo  $_SESSION['weight'];?> </div>
  <b>Mobile Number</b>
  <div class="rec"> <?php echo  $_SESSION['mobile_number'];?> </div>
</center>  
</div>
</body>
</html>


