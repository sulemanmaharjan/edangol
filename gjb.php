<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
echo "hello";
 

$a=80;
switch ($a)
{
case 1:
echo "jason";
break;
case 2: 
echo "basnet";
break;
default:
echo "geeta";
}
for($a=0;$a<10;$a++)
{
    echo $a;
}
while($a<20)
{
    echo $a;
    $a++;
}
do
{
    echo $a;
    $a++;
}while($a<40);

function json($a,$b)
{
    return $a+$b;
}
echo json(9,3);
$ju=array(1,5,2,3,4,5);
sort($ju);

for ($i=0; $i < 6; $i++) { 
    # code...
    echo $ju[$i];
}


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
    ?>
</body>
</html>