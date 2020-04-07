<?php
include 'connect.php';

$red = "red";
$purple = "purple";
$navy = "darkblue";
$blue = "blue";
$cyan = "cyan";
$turqoise = "turqoise";
$green = "green";
$yellow = "yellow";
$orange = "orange";

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
    } else if ($_POST['color'] == 'cyan') {
        $huidigeKleur = $cyan;
    } else if ($_POST['color'] == 'teal') {
        $huidigeKleur = $turqoise;
    } else if ($_POST['color'] == 'green') {
        $huidigeKleur = $green;
    } else if ($_POST['color'] == 'yellow') {
        $huidigeKleur = $yellow;
    } else if ($_POST['color'] == 'orange') {
        $huidigeKleur = $orange;
    }




    $selectPoints = "SELECT * FROM points";
    $resultSelectPoints = mysqli_query($db, $selectPoints)
    or die('Error '.mysqli_error($db).' with query '.$selectPoints);

    $points = [];

    while($row = mysqli_fetch_assoc($resultSelectPoints))
    {
        $points[] = $row;
    }

    foreach ($points as $currentpoints){
    }

    if ($currentpoints['current_points'] > 0){
        $setColor = "UPDATE color SET current_color = '$huidigeKleur'";
        $result = mysqli_query($db, $setColor);
        if ($result) {
            $selectStatColor = "SELECT * FROM statistics";
            $result = mysqli_query($db, $selectStatColor);

            while($row = mysqli_fetch_assoc($result)) {
                $currentColorStat = $row;
            }

            print_r($currentColorStat[$huidigeKleur]);

            $newColorStat = $currentColorStat[$huidigeKleur] + 1;

            $setNewColorStat = "UPDATE statistics SET $huidigeKleur = '$newColorStat'";
            $result = mysqli_query($db, $setNewColorStat);
            if ($result) {

            } else {
                print_r("er is iets fout gegaan");
            }
        } else {
            print_r("er is iets fout gegaan");
        }

        $newPoints = $currentpoints['current_points'] - 1;

        print_r($newPoints);

        $setPoints = "UPDATE points SET current_points = '$newPoints'";
        $result = mysqli_query($db, $setPoints);
        if ($result) {
            mysqli_close($db);
        } else {
            print_r("er is iets fout gegaan");
        }

        header('location: ../../live/index.php');
    } else {
        echo "Er zijn niet genoeg punten om de kleur te veranderen, gooi eerst wat afval weg";
    }
}



//header('../../live/index.php');

?>
