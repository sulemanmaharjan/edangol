<?php


 $con =new mysqli("localhost","root","","evan",3308); //3306

$sql="select * from student";
$result=$con->query($sql);



while($row=$result->fetch_assoc())
{
    echo $row['studentid']."----------";
    echo $row['studentname']." ---- ";
    echo $row['address']."<br>";
}
 

?>