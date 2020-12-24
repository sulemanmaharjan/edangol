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

$d=strtotime("+2 day");
echo date("Y-m-d h:i:sa", $d) . "<br>";

include "array.php";

include "form.html";
include "footer.php"



?>

    
</body>
</html>