<?php
$rgbColor = array();
 
//Create a loop.
foreach(array('r', 'g', 'b') as $color){
    //Generate a random number between 0 and 255.
    $rgbColor[$color] = mt_rand(0, 255);
}
 
var_dump($rgbColor);


<div style="background-color: rgb(<?= implode(",", $rgbColor); ?>);">
    Random Color!
</div>
1
2
3
<div style="background-color: rgb(<?= implode(",", $rgbColor); ?>);">
    Random Color!
</div>
?>
