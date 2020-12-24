<?php

//echo readfile("sar.txt");


$a = fopen("webdictionary.txt", "w") ;
fwrite($a,"hello mr how d yu do");
fclose($a);

$b=fopen("webdictionary.txt", "r") ;
echo fread($b,filesize("webdictionary.txt"));
fclose($b);
?>
<?php
echo "i am jason";

?>
