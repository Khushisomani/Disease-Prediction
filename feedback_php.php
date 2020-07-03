<?php
session_start();
                $host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms pbl";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$comment = filter_input(INPUT_POST,'comment');
if( !empty($comment)){
if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO feedback (patient_id,patient_name,comment) values('".$_SESSION['patient_id']."','".$_SESSION['patient_name']."','$comment')";
		if($conn->query($sql)){
			
                      echo '<script type="text/javascript">';
	              echo 'alert ("Thanks for your feedback");';
                      echo 'window.location.href="profile_details.php";';
                      echo '</script>';
		}
		else{
                        header("Location: feedback.php?Empty=Failure"); 
                      
			}
		$conn->close();
	}
}
else{
        
        echo '<script type="text/javascript">';
	echo 'alert ("Please enter some text");';
        echo 'window.location.href="feedback.php";';
        echo '</script>';
        
	die();
}
?>

	