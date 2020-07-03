<?php
session_start();
require_once('connection.php');

    if(isset($_POST['Login']))
    {
      if(empty($_POST['username']) || empty($_POST['password']))
       {
           header("location:login.php?Empty=Please fill in the blanks");
       }
       else
       {
          $query="select * from patient_details where username='".$_POST['username']."' and password='".$_POST['password']."'";
          $result=mysqli_query($con,$query);   
          if($row=mysqli_fetch_assoc($result))
          {
            
             $_SESSION['patient_id']=$row['patient_id'];
             $_SESSION['patient_name']=$row['patient_name'];
             $_SESSION['age']=$row['age'];
             $_SESSION['weight']=$row['weight'];
             $_SESSION['gender']=$row['gender']; 
             $_SESSION['blood_group']=$row['blood_group'];
             $_SESSION['mobile_number']=$row['mobile_number'];                
             $_SESSION['logged_in']=true;
             
             header("location:profile_details.php");
          }
          else
          {
              echo '<script type="text/javascript">';
	              echo 'alert ("Either username or password is incorrect");';
                      echo 'window.location.href="home.php";';
                      echo '</script>';
          }
       }
    }
    else
    {
       echo'Not Working';
    }
?>