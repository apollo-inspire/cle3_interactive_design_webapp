<?php
include 'connect.php';

$red = "255,0,0";
$purple = "128,0,128";
$navy = "0,0,128";
$blue = "0,0,255";
$cyan = "0,255,255";
$teal = "0,128,128";
$green = "0,255,0";
$yellow = "255,255,0";
$orange = "255,165,0";

if (!isset($_POST['colorsubmit'])) {
    header('location: index.php');
} else {
    if ($_POST['color'] == 'red') {
        $huidigeKleur = $red;
    } else if ($_POST['color'] == 'purple') {
        $huidigeKleur = $purple;
    } else if ($_POST['color'] == 'navy') {
        $huidigeKleur = $navy;
    } else if ($_POST['color'] == 'blue') {
        $huidigeKleur = $blue;
    } else if ($_POST['color'] == 'blue') {
        $huidigeKleur = $cyan;
    } else if ($_POST['color'] == 'blue') {
        $huidigeKleur = $blue;
    } else if ($_POST['color'] == 'blue') {
        $huidigeKleur = $blue;
    }

    print_r($huidigeKleur);

    $query = "INSERT INTO color (current_color)
              VALUES ('$huidigeKleur')
              ON DUPLICATE KEY UPDATE
                current_color = '$huidigeKleur'" ;
//    $sql = "UPDATE color SET current_color = '$huidigeKleur'";
}
