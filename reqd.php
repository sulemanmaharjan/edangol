<?php
$ne="";
$em="";
$pas="";
if($_POST)
{
    if(empty($_REQUEST["name"]))
    {
        $ne="required";
    }
    if(empty($_REQUEST["email"])){
        $em="Email is cmpulsory.         ";
    }
    if(empty($_REQUEST["pass"])){
        $pas="Please enter your password";
    }
    if (preg_match("/^[a-zA-Z ]*$/",$_REQUEST["email"])) {
        $em .= "Only letters and white space allowed";
        echo $em;
      }
}



?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

Name <input type="text" name="name">

<span class ="error">*<?php echo $ne;?></span>
<br>
Email <input type="text" name="email">

<span class ="error">*<?php echo $em;?></span>
<br>
Passwrd <input type="password" name="pass">

<span class ="error">*<?php echo $pas;?></span>
<br>
<input type="submit" value="Login">

</form>