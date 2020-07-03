<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>enter symptom 1</title>
<style>
body{
	background-image:url("27.jpg");
	background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
ul {
    list-style-type:none;
    margin:0px;
    padding:0px;
    overflow:hidden;
    background-color:rgb(50, 50, 58);;
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
table{
	 border:5px solid LightBlue;
	 border-collapse:collapse;
	 
}
tr,td,th{
      color:black;
	  border:5px solid LightBlue;
	  padding:8px;
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
      width:900px;
	  
      text-align:left;
      padding:20px;
	  margin: 0px 170px;
}
.rec{
           width:300px;
           height:30px;
           background-color:white;
           color:black;
           border:1px solid black;
           padding:2px;
} 
select{
 width: 480px;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid black;
    box-sizing: border-box;
    height:40px;
}
button{
	width:150px;
	height:50px;
        background-color:red;
        color:white;
        font-size:25px;
        margin: 8px 8px;
}
</style>
</head>
<body>
<div class="box">
<ul><center>
  <li><font size="5"><a href="profile_details.php"{
    background-color:rgb(80,80,80);
    color:white;
    padding:25px 100px 25px 100px;
}>Profile</a></li>
  <li><a href="s_input.php">Search Disease</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="#about"></a></li>
  <li><a href="logout.php">Logout</a></li>  
</center></ul>
<center><p style="color:red; font-size:35px;"> <u>Analysis Complete</u> </p></center>
<u><b>Patient Particulars:</b></u><br><br>
<table>
<tr>
   <th> Patient Name</th>
   <th> Gender</th>
   <th> Age</th>
   <th> Blood Group</th>
   <th> Weight</th>
</tr>
<tr>
   <td><?php echo $_SESSION['patient_name']; ?>  </td>
   <td> <?php echo $_SESSION['gender']; ?>  </td>
   <td> <?php echo $_SESSION['age']; ?>  </td>
   <td> <?php echo $_SESSION['blood_group']; ?>  </td>
   <td> <?php echo $_SESSION['weight']; ?>  </td>
</table><br>
<b><u style="font-size 25px;">Suspected Disease is :</u></b> &nbsp 
<?php
$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms pbl";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(isset($_POST['Login']))
        {
      if(empty($_POST['sym3']))
		  {
           header("location:new2.php?Empty=Please fill in the blanks");
       }
       else
		   
		   {
		   
          $query="select * from diseases where sym3='".$_POST['sym3']."' and sym1='".$_SESSION['sym1']."'and sym2='".$_SESSION['sym2']."'";
          $_SESSION['sym3']=$_POST['sym3'];
          
		 //echo $_SESSION['sym3'];
		$result=mysqli_query($conn,$query) or die(mysqli_error());
		//echo"<table border='0px'>";
		while($row=mysqli_fetch_array($result))
		{
			$_SESSION['dis_id']=$row[0];
                        $_SESSION['dis_name']=$row[1];
			//echo"<tr>";
		?>	
			<i style="color:red ; font-size 25px;""><?php echo $_SESSION['dis_name'];?></i> 
			
		<?php 
			
		}
		?>
		
		<br><br>
		<b><u style="font-size 25px;">Suggested medicines are:</u></b><br><br>
		<table>
		<tr>
   <th> Medicine Name</th>
   <th> Manufacturer</th>
   <th> Type of Medicine</th>
   <th> Dose</th>
</tr>
		<?php
		$query2="select med_name,manufacturer,type,dose from medicine where  (dis_id='".$_SESSION['dis_id']."') and (age='".$_SESSION['age']."')"; 
        $result2=mysqli_query($conn,$query2) or die(mysqli_error());
		
		while($row2=mysqli_fetch_array($result2))
		{
			$_SESSION['med_name']=$row2[0];
			$_SESSION['manufacturer']=$row2[1];
			$_SESSION['type']=$row2[2];
			$_SESSION['dose']=$row2[3];
			
			?>
			<tr>
			<td><?php echo $_SESSION['med_name'];?></td>
			<td><?php echo $_SESSION['manufacturer'];?></td> 
	        <td><?php echo $_SESSION['type'];?></td>
			<td><?php echo $_SESSION['dose'];?></td>
			</tr>
			<?php
		}
		echo"</table>";
		?>
		<br>
		<b><u style="font-size 25px;">Suggested Doctors:</u></b><br><br>
		<table>
		<tr>
   <th> Doctor Name</th>
   <th> Qualifications</th>
   <th> Experience</th>
   <th> Mobile Number</th>
   <th> State </th>
</tr>
<?php
		$query3="select doc_name,qualifications,experience,mobile_no,state from doctor,diseases where  (diseases.dis_id='".$_SESSION['dis_id']."') and (diseases.dis_id=doctor.dis_id)"; 
        $result3=mysqli_query($conn,$query3) or die(mysqli_error());
		//echo "<table style='border:2px;'>";
		while($row3=mysqli_fetch_array($result3))
		{
			$_SESSION['doc_name']=$row3[0];
			$_SESSION['qualifications']=$row3[1];
			$_SESSION['experience']=$row3[2];
			$_SESSION['mobile_no']=$row3[3];
			$_SESSION['state']=$row3[4];
			echo"<tr>";
			?>
			<td><?php  echo $_SESSION['doc_name'];?></td>
			 <td><?php      echo $_SESSION['qualifications'];?></td>
			<td><?php	   echo $_SESSION['experience'];?></td>
			<td><?php	   echo $_SESSION['mobile_no'];?></td>
			<td><?php	   echo $_SESSION['state'];?></td>
		
			<?php
			echo"</tr>";
			
		}
		echo "</table>";
	   }
	   
		}
		else
    {
       echo'Not Working';
    }
?>

</div>
