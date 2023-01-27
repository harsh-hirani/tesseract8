<?php
$galleryLinks = array(
  
);
$cars = array(
    "Volvo",
     "BMW", 
     "Toyota");
echo count($cars);
function imageLoadinglinks(){
    for ($i=0; $i < sizeof($galleryLinks); $i++) { 
        echo "\"".$galleryLinks[$i]."\"";
        if ($i != (sizeof($galleryLinks) - 1)) { 
            echo ",";
        }
    }
}
?>