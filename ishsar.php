<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <div class="jumbotron container">
    <h1> Please fill this form </h1>
    <form action="" class="form text-denger m-5 " method="post">
    Name:<input type="text" class="form-control" name="name" require>
    <br><br>
    Address:<input type="text" class="form-control" name="address" require>
    <br><br>
    School Name:<input type="text" class="form-control" name="schoolname" require>
    <br><br>
    Reading At:<input type="text" class="form-control" name="readingat" require>
    <br><br>
    Comment:<input type="comment" class="form-control" name="comment" >
    <br><br>
    <h1> Situation:</h1>
   <br><br>
<input type="radio" name="text" value="Good">Good
<br><br>
<input type="radio" name="text" value="Better">Better
<br><br>
<input type="radio" name="text" value="Have to improve">Have to improve
<br><br>
<input type="submit" name="submit" value="Submit"> 

    </form>
    </div>
    <?php
    if($_POST )
    {
    echo $_REQUEST["name"];
    echo $_REQUEST["address"];
    echo $_REQUEST["schoolname"];
    echo $_REQUEST["readingat"];
    echo $_REQUEST["comment"];
    }
   ?>
</head>
<body>
    
</body>
</html>