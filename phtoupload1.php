<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        
</head>
<body>   


<?php
/* $str = "<h1>Hello World!</h1>";
$str = filter_var($str, FILTER_SANITIZE_STRING);
echo $str;

$y="sarmila";
if(filter_var($y,FILTER_VALIDATE_INT))
{
    echo "valid";
}
else
{
    echo "invalid";
} */

if($_POST)
{
    $num=$_REQUEST['number'];
    if(!.filter_var($num,FILTER_VALIDATE_INT))
    {
        echo "i dont think your age is ".$num;
    }
    else{
        echo " wow sweet ".$num;
    }
}

?>
<h1>please enter your age</h1>

<form action="" class="form bg-warning text-danger p-5 m-5" method="post" enctype= "multipart/form-data">


<input type="text" name="number">
<input type= "submit" value = "click">

</form>


    
</body>
</html>