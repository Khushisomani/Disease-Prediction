<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> LOGIN PAGE </title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image {
  /* The image used */
  background-image: url("6.jpg");
 /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.top-left {
  position: absolute;
  top: 10px;
  left:800px;
  font-size:70px;
  font-family: Georgia, serif;
  color:white;
  right:80px;
}
.cl{
background-color:rgb(40, 40, 40);
    width: 370px;
    padding: 30px 0px 0px; 
    border: 2px black solid;
    margin-top: 90px;
    margin-left:5%;
    height: 300px;
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
	width:360px;
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
</style>
</head>
<body>
<div class="bg-image"></div>
<div class="top-left">
<div class="cl">

<?php
   if(@$_GET['Empty']==true)
   {
?>
    <div class="t"><?php echo $_GET['Empty'] ?></div>
<?php
    }
?>

<?php
   if(@$_GET['Invalid']==true)
   {
?>
    <div class="t"><?php echo $_GET['Invalid'] ?></div>
<?php
    }
?>

<form method="post" action="login_php.php">	
<input type="text" name="username" placeholder="Username" ><br>
<input type="password" name="password" placeholder="Password" ><br><br>
<button name="Login">Login</button>
</form>
</div>
<div class="log">
Do not have an account? <a href="https://www.facebook.com">Sign Up</a>
</div>
</div>
</body>
</html>