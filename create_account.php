<html>
<head><title>Form</title>
<style>
.bg-image {
  /* The image used */
  background-image: url("26.jpg");
 /* Full height */
  width:100%;
height: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.cl{
background-color:rgb(255,255,255);
    width: 650px;
    padding: 20px 0px 0px; 
    border: 5px black solid;
    margin:0px 300px;
}
form {
    font-size: 20px;
}

input[type=text], input[type=password], input[type=number], input[type=submit]{
    width: 600px;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid black;
    box-sizing: border-box;
    height:40px;
}
input[type=radio]{
     font-color: black;
}
select{
 width: 600px;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid black;
    box-sizing: border-box;
    height:40px;
}
button {
    background-color:LimeGreen;
    color: black;
    padding: 14px 20px;
    margin: 8px 25px;
    border: solid black 1px;
    cursor: pointer;
    width: 600px;
    height:40px;
}
.log{
    margin:-40px 300px;
    padding:5px;
    background-color:rgb(255, 255, 255);
    border:4px black solid;
    font-size:20px;
    width:640px;
    color:black;
}
.top-right {
  position: absolute;
  top: 10px;
  left:100px;
  font-size:30px;
  font-family: Georgia, serif;
  color:black;
  right:450px;
}
</style>
</head>
<body >
<div class="bg-image">
<div class="top-right">
<br><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b style="color:#ffff99";><u>REGISTER</u></b></center>
<div class="cl">
<form method="POST" action="create_acc_php.php"><center>
<input type="number" name="patient_id" placeholder="Patient ID"><br>
<input type="text" name="patient_name" placeholder="Patient Name"><br>
<input type="radio" name="gender" value="male" checked> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other  <br>
<select name="age">
  <option value="">Age</option>
  <option value="below 3 years">below 3 years</option>
  <option value="3-10 years">3-10 years</option>
  <option value="10-18 years">10-18 years</option>
  <option value="18-40 years">18-40 years</option>
  <option value="above 40 years">above 40 years</option>
</select><br>
<select name="blood_group">
  <option value="">Blood Group</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select><br>
<input type="number" name="weight" placeholder=" Weight"><br>
<input type="text" name="username" placeholder="username" ><br>
<input type="password" name="password" placeholder="password"> <br>
<input type="number" name="mobile_number"placeholder="Mobile Number" ><br>
<input type="submit" value="Login">
</center>
</form>
</div>
</div>
</div>