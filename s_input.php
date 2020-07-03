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
  <li><a href="logout.php">Logout</a></li>  
</center></ul>
<center><p style="color:rgb(0, 230, 138); font-size:35px;"> <u>Disease Prediction</u> </p>
<div class="box">
<form method="post" action="new1.php">

   <b>&nbsp Please select a Symptom</b>
   <select name="sym1" required>
  <option value="">--Select--</option>
  <option value="abdominal pain">abdominal pain</option>
  <option value="chest pain">chest pain</option>
<option value="Irregular periods">irregular periods</option>
  <option value="dry cough">dry cough</option>
 <option value="fainting">fainting</option>
 <option value="high fever">high fever</option>
 <option value="hunger">hunger</option>
 <option value="red spots">red spots</option>
<option value="vomiting">vomiting</option>
<option value="fatigue">fatigue</option>
<option value="Weight gain">weight gain</option>
<option value="eye redness">eye redness</option>
<option value="hard to sleep">hard to sleep</option>
<option value="stomach cramps">stomach cramps</option>
<option value="headache">headache</option>
<option value="Rashes on skin">rashes on skin</option>
 <option value="swell in armpit">swell in armpit</option>
 <option value="vision problem">vision problem</option>
</select><br>
<button name="Login"> NEXT</ button>
</form>
</center>  
</div>
</body>
</html>