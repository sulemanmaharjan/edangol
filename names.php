<?php
        $names=array("nepal","nepali","newar","newari","nephop","sarmila","deepa","ramesh","sita","ram","kris","john","mikey","puran");

        $x=$_REQUEST['sea'];
      
if (empty($x)) {
    return;
}
        foreach ($names as $key) {
            if ($key[0]==$x[0]) {
                if (strstr($key, $x)) {
                    echo $key."  ";
                }
            }
        }
