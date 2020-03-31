<?php

include 'connect.php';

$selectPoints = "SELECT * FROM points";
$resultSelectPoints = mysqli_query($db, $selectPoints)
or die('Error '.mysqli_error($db).' with query '.$selectPoints);

$newPoints = $resultSelectPoints - 1;

$updatePoints = "UPDATE points SET current_points = '$newPoints'";
$resultUpdatePoints = mysqli_query($db, $updatePoints);
if ($result) {
    mysqli_close($db);
} else {
    print_r("Het punten aftrekken is verkeerd gegaan");
}


