<?php

//sort() - sort arrays in ascending order
//rsort() - sort arrays in descending order
//asort() - sort associative arrays in ascending order, according to the value
//ksort() - sort associative arrays in ascending order, according to the key
//arsort() - sort associative arrays in descending order, according to the value
//krsort() - sort associative arrays in descending order, according to the key


$names=array("sharmila","deepa","ramesh","evan");
//rsort($names);

for ($i=0; $i <count($names); $i++) { 
   // echo $names[$i];
}

echo "<br>";

$anames=array("sharmila"=>"Ashish","deepa"=>"Binod","ramesh"=>"Sophiya","evan"=>"Renu");
foreach ($anames as $key => $value) {
  echo $key." => ".$value."<br />";
}
krsort($anames);
echo "<br>";
foreach ($anames as $key => $value) {
    echo $key." => ".$value."<br />";
  }


  echo $names[1]
;?>