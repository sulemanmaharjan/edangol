<?php

$con =new mysqli("localhost","root","","evan",3308); //3306
$name=$_REQUEST['studentname'];
$add=$_REQUEST['address'];
echo $name;
$sql="insert into student(studentname,address) values ('$name','$add')";
$result=$con->query($sql);


?>