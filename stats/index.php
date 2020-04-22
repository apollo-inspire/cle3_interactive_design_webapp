<?php
 // FOR SHOWCASE 04-07 NO DATABASE

    include "../backend/database/connect.php";

    $selectPoints = "SELECT * FROM points";
    $result = mysqli_query($db, $selectPoints);

    $points = [];

    while($row = mysqli_fetch_assoc($result)){
        $points = $row;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <title>LEDopafval</title>
</head>
<body>

<!--header-->
<?php
include '../includes/header/header_1down.php';
?>


<main>
    <div class="container">
        <a href="achievements" class="button2 item-list">
            Achievements
        </a>

        <div class="infobox">
            <p>total points</p>
            <h2><?php print_r($points['total_points'])?></h2>
        </div>

        <div class="infobox">
            <p>current points</p>
            <h2><?php print_r($points['current_points']) ?></h2>
        </div>

        <div class="infobox">
            <p>gained this week</p>
            <h2>352</h2>
        </div>

        <div class="infobox graph">
            <p>live points</p>
            <p>this week</p>
            <p>insert graph here</p>
        </div>

        <div class="infobox graph">
            <p>total live points</p>
            <p>this week</p>
            <p>insert graph here</p>
        </div>

        <div class="item grid">
        </div>
    </div>

    <?php include 'pie_chart.php'; ?>
</main>



//footer

<?php include '../includes/footer.php'; ?>

</body>
</html>