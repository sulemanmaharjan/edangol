<?php



$a1=array("tyu","tyuyt");
$a2=array("dsf","yeuiuyllow");

$newarray=array_replace($a1,$a2);
$a=array("a"=>"red","b"=>"green","c"=>"red");
$x=array_unique($a);

foreach ($x as $key) {
 echo $key;
}


$r=array(1,2,3,1,4,5,1);

$p=array_unique($r);
foreach ($p as $key ) {
    echo $key;
}
?>