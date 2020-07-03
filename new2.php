<?php
session_start();
?>
		
<!DOCTYPE html>
<html>
<head><title>enter symptom 1</title>
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
<body bgcolor=black>
<ul><center>
  <li><font size="5"><a href="profile_details.php"{
    background-color:rgb(80,80,80);
    color:white;
    padding:25px 100px 25px 100px;
}>Profile</a></li>
  <li><a href="s_input.php">Search Disease</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="#ranking">Logout</a></li>  
</center></ul>
<center><p style="color:rgb(0, 230, 138); font-size:35px;"> <u>Disease Prediction</u> </p>
<div class="box">  
<!--<form method="post" action="new1.php">-->
<form>
   <b> Symptom 1 is:</b><br>
   <div class="rec"> <?php echo $_SESSION['sym1'] ?>  </div>
<button name="Login"> NEXT </button>
</form>
</center>  
</div><br><br>
<center>
<div class="box">
<form>
   <b> Symptom 2 is:</b><br>
   
<?php
        $host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms pbl";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$sym2 = filter_input(INPUT_POST,'sym2');
        if(isset($_POST['Login']))
        {
       
           if(empty ($sym2))
		  {
           header("location:s_input.php?Empty=Please fill in the blanks");
          }
       else
       {
        $query="select sym3 from diseases where sym2='".$_POST['sym2']."' and sym1='".$_SESSION['sym1']."'";
        $_SESSION['sym2']=$sym2;
	?>
	<div class="rec"> <?php echo $_SESSION['sym2'] ?>  </div>
<button name="Login"> NEXT </button>
</form>
</center>  
</div><br><br>
<?php
//echo $_SESSION['sym1'];		  
		$result=mysqli_query($conn,$query);?>
		<center>
         <div class="box">
		 <?php 
         while($row=mysqli_fetch_array($result))
		{  	
	        $_SESSION['sym3']=$row[0];
                echo $_SESSION['sym3']; 
                echo "<br> ";
	    }
		?>
		<!--echo"<table border='0px'>";-->
		<b>Please select another Symptom</b><br>
		
         <form method="post" action="new3.php">
		 
		 <select name="sym3" required>
		 <option value="">--Select--</option>
   		<?php
		mysqli_data_seek($result,0);
		 while($row=mysqli_fetch_array($result))
		{
			$_SESSION['sym3']=$row[0];?>
                       
                      <option value="<?php echo $_SESSION['sym3'];?>"> <?php echo $_SESSION['sym3'];?></option>
		<?php 
		} 
	?>
	</select>
	<button name="Login"> NEXT </button>
    <!--  sym3:<input type="text" name="sym2"><br>-->
       </form>
	   </div>
	   </center>
<?php  
     }
      }
	 
     else
    {
       echo'Not Working';
    }
?>















