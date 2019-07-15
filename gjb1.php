<?php
$u=array("jason","ramesh","evan","sharmila","deepa");
$p="@@1234##";
$valid=0;

for ($i=0; $i <5 ; $i++) { 
   if($_REQUEST["xyz"]==$u[$i])
   {
    $valid=1;
    break;
}
}
if ($valid==0) {
    echo $_REQUEST["xyz"]. " is not associated with any Facebook account";
}
else
{
    if($_REQUEST["abc"]==$p)
    {
        echo 
        "welcome to facebook ".$_REQUEST["xyz"];
    }
    else{
        echo "the password you prvided is not correct";
    }
}






?>