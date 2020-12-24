<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST)
    {
        $nam=$_REQUEST['name'];
        if(filter_var($nam,FILTER_VALIDATE_INT))
        {
         echo "i dont think your name is".$nam;
        }
        
        else{
            echo "wow its a sweet name".$nam;
        }

    }
    ?>
    <h1>please enter your name</h1>
    <form action="" class="form bg-warning text-danger p-5 m-5" method="post" enctype= "multipart/form-data">
    <input type="text" name="name">
    <input type="submit" name="click">

    </body>
</html>