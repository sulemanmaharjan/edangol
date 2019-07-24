<?php
$con= new mysqli("localhost","root","","evan",3308 );
$sql= "select from *student";
$result=$con->query($sql);
while ($row = $result->fetch_assoc())
{
echo $row["studentname"]."<br>";
echo $row [ "address"]."<br>";





}








?>