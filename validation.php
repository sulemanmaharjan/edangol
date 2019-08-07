<?php

$a="  ram  ";
$a=trim($a);
echo $a;

$b="dfmngfdjk\dfgd\dfg\df";
echo stripslashes($b);


echo htmlspecialchars("<script>window.location.assign('https://www.google.com')</script>");

?>