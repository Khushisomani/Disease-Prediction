<?php
session_start();

require_once('connection.php');
?>
    


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> ALL FEEDBACK </title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("back.jpg");
  background-repeat:no-repeat;
	background-attachment:fixed;
  font-size:25px;	
}
ul {
    list-style-type:none;
    margin:0px;
    padding:0px;
    overflow:hidden;
    background-color:black;
	
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
.a{
           width:65%;
           background-color:white;
           color:black;
          
           padding:20px 20px 0px 20px;
           margin: 30px 150px 20px 200px;
           text-align:left;
} 
</style>
</head>
<body>
<center><p style="font-size:40px;"> <U>ALL FEEDBACKS</U> </P></center>
<div class="a">

<?php
if(isset($_POST['Login']))
    {
       $query="select * from feedback";
          $result=mysqli_query($con,$query);   
          while($row=mysqli_fetch_array($result))
		{
            $pid=$row[0];
            $pname=$row[1];
            $comment=$row[2];
			?>
      
   <img src="32.png" style="width:130px; height:110px; float:left; margin:0px 20px 0px 0px;">
   <b><?php echo $pname;?></b><br>
   
   <i><?php echo $comment;?></i>
   <br><br><br>
<hr>

<?php
		}
		echo "</div>";
		//echo"</table>";
    }
    else
    {
       echo'Not Working';
    }
?>

</table>
</div>
</body>
</html>
