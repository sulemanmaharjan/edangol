<?php

$ages=array("sarmila"=>16,"urmila"=>21,"chandika"=>17,"priya"=>18,"narmada"=>22,"kala"=>18,"rewati"=>19,"chandalika"=>24);
$name=$_REQUEST['name'];
$chha=false;
$age=0;
foreach ($ages as $key => $value) {
  if($key==$name)
  {
      $chha=true;
      $age=$value;
      break;
  }
}
if($chha==true)
{
    echo $age;
}
else
{
    echo "not available";
}


?>