<?php
                $host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms pbl";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
//$_SESSION['id']=$_POST['username'];
//$_SESSION['name']=$_POST['username'];
//$_SESSION['gender']=$_POST['username'];
//$_SESSION['age']=$_POST['username'];
//$_SESSION['blood_group']=$_POST['username'];
//$_SESSION['username']=$_POST['username'];
//$_SESSION['password']=$_POST['username'];

$patient_id = filter_input(INPUT_POST,'patient_id');
$patient_name = filter_input(INPUT_POST,'patient_name');
$gender = filter_input(INPUT_POST,'gender');
$age = filter_input(INPUT_POST,'age');
$blood_group = filter_input(INPUT_POST,'blood_group');
$weight = filter_input(INPUT_POST,'weight');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$mobile_number = filter_input(INPUT_POST,'mobile_number');
if( !empty($password)&&!empty($username)){
	
	if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO patient_details (patient_id,patient_name,gender,age,blood_group,weight,username,password,mobile_number) values('$patient_id','$patient_name','$gender','$age','$blood_group','$weight','$username','$password','$mobile_number')";
		if($conn->query($sql)){
			echo '<script type="text/javascript">';
	              echo 'alert ("Successfully Registered");';
                      echo 'window.location.href="home.php";';
                      echo '</script>';
		}
		else{
                       
                      echo '<script type="text/javascript">';
	              echo 'alert ("This ID is already existing..please try with some other ID");';
                      echo 'window.location.href="create_account.php";';
                      echo '</script>';
			}
		$conn->close();
	}
	
	
}
else{
        
        echo '<script type="text/javascript">';
	echo 'alert ("Username or password should not be empty");';
        echo 'window.location.href="create_account.php";';
        echo '</script>';
        
	die();
}
?>