<!-- bootstrap css cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- bootstrap js cdn -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

//echo $_FILES['phot']['type']."<br><br>";

foreach ($_FILES['phot'] as $key => $value) {
  // echo $key."-----".$value."<br>";
} 
//jpeg jpg png gif

$photokonaam=$_FILES['phot']['name'];
$index= strpos($photokonaam,".");
$extension=substr($photokonaam,$index+1);
$liney=false;
switch($extension)
{
    case "jpg":
    case "jpeg":
    case "png":
    case "gif":
        $liney=true;
        break;
        default:
        $liney=false;

}
if($liney==true)
{
move_uploaded_file($_FILES['phot']['tmp_name'],"images/".$_FILES['phot']['name']);
echo "<h1 class='text-success'>suceesfully uploaded your beutiful picture!!</h1>";
}
else{
    echo "<h1 class='text-danger'>the upladed item is nt an image!!</h1>";
}



?>
<img src="images/<?php echo $_FILES['phot']['name'];?>" class="rounded-circle m-2 p-3" height="300" alt="">