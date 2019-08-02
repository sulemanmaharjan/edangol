<?php


$ages= array("ram"=>"21","shyam"=>"32","hari"=>"27");
arsort($ages);
foreach($ages as $abc=>$xyz)
{
    echo $abc."----".$xyz;
}

$nums=array("ram","kris","mike");

rsort($nums);
foreach($nums as $x)
{
  //  echo $x;
}

$matrix=array(
    array(1,2,3),  // 00 01 02
    array(4,5,6),  // 10 11 12 
    array(7,8,9)   // 20 21 22
);
$sum=0;
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
       if($row+$col==2)
       {
           $sum=$sum+$matrix[$row][$col];
       }
    }
    echo "<br>";
}
//echo $sum;
?>
<script>

a=[1,2,3,4,5]

a.forEach(function(x){
    document.write(x);
})

a.forEach(x=>document.write(x))

b=a.map(x=>x+4);

//document.write(b);

</script>