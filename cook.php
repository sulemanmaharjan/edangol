<?php

$g="username";
$b="Jason Basnet";
setcookie($g, $b ,time()+60*60*24*365);

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$g])) {
    echo "Cookie named '" . $g . "' name is required!";
} else {
    echo "Cookie '" . $g . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$g];
}
?>

</body>
</html> 
