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
$x=60;
switch($x)
{
    case 6:
    echo "first";
    break;
    case 60:
    echo "first2";
    break;
    case 3:
    echo "first3";
    break;
    case 4:
    echo "first4";
    break;
    default:
    echo "default";
    break;
}

for ($i=0; $i <10 ; $i++) { 
   echo $i;
}
while($i<20)
{
    echo $i;
    $i++;
}
do{
    echo $i;
    $i++;
}while($i<30);

     ?>
</body>
</html>