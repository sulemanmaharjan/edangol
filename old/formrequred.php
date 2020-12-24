<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo($_SERVER[PHP_SELF])?>"method="post>">
    Name:<input name="text" name="name">
    <span></span>
    <br><br>
    E-mail:<input name="text" name="email">
    <span></span>
    <br><br>
    Website:<input name="text" name="website">
    <span></span>
    <br><br>
    comment:<input name="comment">
    <br><br>
    <input name="submit" name="login">
</form>
<?php
   echo $_REQUEST["name"]
   <
?>
    
</body>
</html>