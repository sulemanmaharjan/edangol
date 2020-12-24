<style>
.suc{
    color:green;
}
.error{
    color:red;
}
</style>

<?php

$uname=array("deepa@gmail.com","sharmila@gmail.com","ramesh@gmail.com");

$email=$_REQUEST["x"];
$a=1;
//$valid=false;
for ($i=0; $i <3 ; $i++) { 
   if($email==$uname[$i])
   {
     //$valid=true;
     $a=5;
     break;
   }
}

if($a==5)
{
    echo "<h1 class='suc'>Login successful</h1>";
    echo "<h2 class='suc'>Welcome $email</h2>";
}
else{
    echo "<h2 class='error'>no email found</h2>";
}




?>