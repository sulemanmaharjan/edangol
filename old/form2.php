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
$ne= "";
$er="";
$ee="";
$pe="";
$name="";
$email="";
$password="";
if ($_POST)
{
    $name= $_REQUEST["name"];
    $email =$_REQUEST["name"];
    if(empty($name));
    {
        $ne="User Name is requored!!!!!!!";
    }
    if(empty($email))
    {
        $ee="Email is requored!!!!!!!";
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
    
</body>
</html>
