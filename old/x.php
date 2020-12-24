   <?php
$a = "user";
$b = "jason";
setcookie($a, $b,time()+60); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$a])) {
    echo "Cookie named '" . $a . "' is not set!";
} else {
    echo "Cookie '" . $a . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$a];
}
?>

</body>
</html> 