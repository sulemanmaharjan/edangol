!
<?php
$names =array ( "deepa", "anita","rupa", "manisha");
asort ($names);
for ($i=0; $i<4 ;$i++)
{
   // echo $names [$i];
}

$names= array ("nepal"=>"kathmandu", "kavre"=>"okilo","bhaktapur"=>"banepa");
krsort($names);
foreach ($names as $key=>$value) {
echo ($value);


}
?>
