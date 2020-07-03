<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> FEEDBACK </title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif; 
   background-image:url("back.jpg");
  background-repeat:no-repeat;
	background-attachment:fixed;
  background-size: cover;
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
    padding: 9px 15px;
    text-decoration:none;
}
.top-left {
  position: absolute;
  top: 8px;
  left:300px;
  font-size:50px;
  font-family: Georgia, serif;
  color:white;
  
}
.cl{
background-color:rgb(40, 40, 40);
    width: 570px;
    padding: 30px 0px 0px; 
    border: 2px black solid;
    margin-top: 30px;
    margin-left:5%;
    height: 400px;
}
form {
    font-size: 20px;
}
input[type=text], input[type=password] {
    width: 90%;
    padding: 16px 20px;
    margin: 5%;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
}
.log{
    margin-left:5%;
    margin-top:3px;
	padding:5px;
background-color:rgb(40, 40, 40);
    border:2px black solid;
 
	font-size:20px;
	width:560px;
}
.t{
   font-size:20px;
   text-align: center;
}
button {
        width: 90%;
    padding: 16px 20px;
    margin: 5%;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
} 
img{
width:100px;
height:100px;
}
textarea{
  display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
 padding: 16px 20px;
margin:5%;
}
</style>
</head>
<body>
<ul>
 <center> <li><font size="5"><a href="profile_details.php"{
    background-color:rgb(80,80,80);
    color:white;
    padding:25px 100px 25px 100px;
}>Profile</a></li>
  <li><a href="s_input.php">Search Disease</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="logout.php">Logout</a></li>  
</center></ul>
<div class="top-left">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<center><b><u>FEEDBACK</u></b></center>
<div class="cl">
<form method="post" action="feedback_php.php">
<center><img src="36.png"></center>	
<textarea rows="4" cols="60" name="comment" placeholder="Give your Feedback here..."></textarea> 
<button name="Login">Submit</button>
</form>
</div>
<div class="log">
<center><form method="post" action="all.php">
To view all feedbacks <button name="Login" style="width:100px; height:30px; margin:1%; padding:0px">Click Here</button> 
</form>
</center>
</div>
</div>
</body>
</html>