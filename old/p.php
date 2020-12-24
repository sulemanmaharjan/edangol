<?php

/* if(isset($_POST['name']))
{
    echo $_REQUEST['name'];
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo $_REQUEST['name'];
}

if($_POST)
{
    echo $_REQUEST['name'];
} */

$usernames=array("ram"=>"123","shyam"=>"456","hari"=>"789");

$user=$_REQUEST['u'];
echo htmlspecialchars($user);
$pass=$_REQUEST['p'];
$valid=false;
foreach ($usernames as $key => $value) {
    if ($key==$user&&$pass==$value) {
        $valid=true;
        break;
    }
}

if ($valid) {
    echo " you are logged in";
} else {
    echo "usernamer or password invalid";
    include "frm.html";
}
