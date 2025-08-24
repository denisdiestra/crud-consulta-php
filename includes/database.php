<?php

$db = mysqli_connect('localhost','root', '123456','appsalon');

if(!$db){
    echo "Hubo un error";
    exit;
}

