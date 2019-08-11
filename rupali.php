<?php
session_start();

echo $_SESSION['xyz'];
// remove all session variables
session_unset();


?>
