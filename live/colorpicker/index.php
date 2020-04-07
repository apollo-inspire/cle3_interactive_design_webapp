<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
    <link href="../../css/background.css" type="text/css" rel="stylesheet">
    <title>LEDopafval</title>
</head>
<body>

<!--header-->
<?php include '../../includes/header/header_2down.php'; ?>


<main>

    <div class="background"></div>


    <form action="../../backend/database/insertdb.php" method="POST">
        <input type="radio"  value="red" name="color">Rood
        <input type="radio" value="purple" name="color">Paars
        <input type="radio" value="navy" name="color">Donkerblauw
        <input type="radio" value="blue" name="color">Blauw
        <input type="radio" value="cyan" name="color">Cyaan
        <input type="radio" value="teal" name="color">Groenblauw
        <input type="radio" value="green" name="color">Groen
        <input type="radio" value="yellow" name="color">Geel
        <input type="radio" value="orange" name="color">Oranje
        <input type="submit" name="colorsubmit">
    </form>


</main>

<!--footer-->
<?php include '../../includes/footer.php'; ?>

</body>
</html>