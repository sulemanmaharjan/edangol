<?php

/* $myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile); */

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

$count=0;
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    $buffer = fgets($myfile);
    $arr = explode(" ",$buffer);
   foreach ($arr as $key) {
    
         $count++;
     
   }
  
  }
fclose($myfile);
echo $count;


$abc=array("ram","shyam","hari");
echo implode($abc);
?>