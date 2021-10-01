<?php
    require 'autoload.php';

    $objUser = new user();

    //insert usuario
    $insert = $objUser->insertUser('ana@gmail.com', '123');
    echo $insert;
?>