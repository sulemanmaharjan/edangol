<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php

   // echo $_REQUEST["e"];
   // echo $_REQUEST["t"];
     
echo $_COOKIE['user'];

setcookie('user','',time() - 3600);
echo $_COOKIE['user'];


    ?>

    
</body>
</html>