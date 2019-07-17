<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p{
        color:red;
    }
    </style>
    
</head>
<body>
   <?php
$x="<b>this is bold</b>";
echo "<p>".htmlspecialchars($x)."</p>";


?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>" >  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php 
if($_POST || $_GET)
{
echo $_REQUEST["name"];
echo $_REQUEST["email"];
echo $_REQUEST["website"];
echo $_REQUEST["comment"];
echo $_REQUEST["gender"];
}
?>


</body>
</html>

