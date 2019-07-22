<?php
$ne="";
$ee="";
$pe="";
$name="";
$email="";
$password="";
if($_POST)
{
    $name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["pass"];
    if(empty($_REQUEST["name"]))
    {
$ne="Required";
    }
    if(empty($_REQUEST["email"]))
    {
$ee="Required";
    }
    if(empty($_REQUEST["pass"]))
    {
$pe="Required";
    }
}


?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Name <input type="text" name="name" value="<?php echo $name; ?>">
<span class="er">*<?php echo $ne; ?></span>
<br>
Email <input type="text" name="email" value="<?php echo $email; ?>">
<span class="er">*<?php echo $ee; ?></span>
<br>
Password <input type="password" name="pass" value="<?php echo $pass; ?>">
<span class="er">*<?php echo $pe; ?></span>
<br>
<input type="submit" value="Login">

</form>