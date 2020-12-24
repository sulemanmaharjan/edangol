<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        <input type="text" name="studentname">
        <input type ="text" name ="a">

        <input type ="submit" value="click">
</form>



<?php
if($_POST)
{
$con= new mysqli ("localhost","root" ,"" ,"evan");
$name=$_REQUEST["studentname"];
$a=$_REQUEST ["a"];
$sql= "insert into student (studentname,address) values ('$name','$a')";
$result=$con->query($sql);
}








?>


    
</body>
</html>