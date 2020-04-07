<?php

//include 'connect.php';
//
//$selectPoints = "SELECT * FROM points";
//$resultSelectPoints = mysqli_query($db, $selectPoints)
//or die('Error '.mysqli_error($db).' with query '.$selectPoints);
//
//$points = [];
//
//while($row = mysqli_fetch_assoc($resultSelectPoints))
//{
//    $points[] = $row;
//}
//
//foreach ($points as $currentpoints){
//  print_r($currentpoints['current_points']);
//}
//if (punten komen aan)
//{
//  $newPoints = $currentPoints['current_points'] + 1;
//}
//print_r($newPoints);
//
//$setPoints = "UPDATE points SET current_points = '$newPoints'";
//$result = mysqli_query($db, $setPoints);
//if ($result) {
//    mysqli_close($db);
//} else {
//    print_r("er is iets fout gegaan");
//}
//
//header('location: ../../live/index.php');