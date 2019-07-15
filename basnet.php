<?php
//$u=array("jason","deepa","sarmila","ramesh");
$u="deepa";
$p="123";
$valid=0;

/* 
for ($i=0; $i <4 ; $i++) { 
   if($_REQUEST["xyz"]==$u[$i])
   {
      $valid=1;
   }
} */

/* 
if($valid==0)
{
    echo $_REQUEST["xyz"]. " is not associated with any Facebook account";
}
if($valid==1)
{
    if($_REQUEST["abc"]==$p)
    {
        echo "you ,are logged in";
    }
    else
    {
        echo "passwred is not correct";
    }
} */

if($_REQUEST["xyz"]==$u && $_REQUEST["abc"]==$p)
{
    echo "login success";
}
else{
    echo "username or password is not correct";
}

?>