<?php
$stream=fopen("web.txt","r");
$az=fread($stream,3);
echo $az;
?>