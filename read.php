<?php

$stream = fopen ("write.txt","r" );
$as= fread( $stream, 5);
echo $as;




?>
