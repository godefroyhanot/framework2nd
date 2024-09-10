<?php 

function dd($debug){
    echo "<pre>";
    var_dump($debug);
    echo "</pre>";
    die();
}