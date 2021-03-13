<?php

$connection = new mysqli("localhost","root","","wikigames");

if(!$connection){
    echo "Koneksi DB Error";
    exit();
}

?>