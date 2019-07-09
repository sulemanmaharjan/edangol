<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //indexed array
$names= array("ram","shyam","hari","kris");
for ($i=0; $i <4 ; $i++) { 
   // echo "<h1>$names[$i]</h1>";
}

$evens=array(2,4,6,8,10);
//echo count($evens);

$names1=array("f"=>"ram","s"=>"shyam","t"=>"hari");
//echo "<h2>".$names1["t"];

foreach ($names1 as $k=>$v) {
    echo $k."   =   ".$v."<br>";
}

$age = array("eter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age["eter"];

$age=array("35","37","43");
echo $age[0];


      ?>
</body>
</html>