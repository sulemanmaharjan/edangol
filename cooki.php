<?php
$a="user";
$s="sarmila";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE)){
        echo "cookie name" .$a. "is not set!" ;   
    }
    else{
        echo "cookie". $a ."is set!<br>";
        echo "value is: " .$_COOKIE[$a];
    }
    
    ?>
</body>
</html>