<?php
$servername="localhost";
$username="root";
$password="";

$con= new mysqli("localhost","root","","sangat");
$sql= "select * from student";
$result =$con->query($sql);

while ($row= $result->fetch_assoc())
{
    
    echo $row ['studentid']. "-------";
    echo $row ["studentname"]."------";
    echo $row ["addressid"]."<BR>";
}
 
?>
