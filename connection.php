<?php
  $con=mysqli_connect('localhost', 'root', '','dbms pbl');
  if(!$con)
    {
      die('Please check your connection'.mysqlierror());
     }
?>