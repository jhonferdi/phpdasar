<?php
//variable scope
$x = 10;

function tampilx(){
    global $x;
    echo $x;
}

tampilx();

?>