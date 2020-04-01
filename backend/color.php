<?php

    include './database/connect.php';

    $selectColor = "SELECT * FROM color";
    $result = mysqli_query($db, $selectColor)
    or die('Error '.mysqli_error($db).' with query '.$selectColor);

    $color =[];

    while($row = mysqli_fetch_assoc($result))
    {
        $color[] = $row;
    }

    foreach ($color as $currentColor){
        print_r($currentColor['current_color']);
    }

//    if ($result) {
//        mysqli_close($db);
//
//    } else {
//        echo "Error";
//    }
//
//
