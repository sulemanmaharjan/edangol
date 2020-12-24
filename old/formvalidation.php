<style>
.e{
color:red;
}
</style>
<?php
$ne="";
$ee="";
$name="";
$email="";

if($_POST)
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
 if(empty($name))
 {
     $ne="User Name is requored!!!!!!!";
 }
 if(empty($email))
 {
     $ee="Email is requored!!!!!!!";
 }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="name" value="<?php echo  $name; ?>" >
<span class="e">* <?php echo $ne; ?>   </span>
<br>
<input type="text" name="email" value="<?php echo $email;?>">
<span class="e">* <?php echo $ee; ?>    </span>
<br>
<input type="submit" value="register">
</form>