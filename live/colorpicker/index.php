<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
    <title>LEDopafval</title>
</head>
<body>

<!--header-->
<?php include '../../includes/header/header_2down.php'; ?>


<main>

    <h1>Colorpicker</h1>
    <?php include '../../includes/background.php'; ?>

    <div class="colorpicker">
        <a href="red" class="button2 color" style="background-color: red"></a>
        <a href="purple" class="button2 color" style="background-color: purple"></a>
        <a href="dark-blue" class="button2 color" style="background-color: darkblue"></a>
        <a href="blue" class="button2 color" style="background-color: blue"></a>
        <a href="cyan" class="button2 color" style="background-color: cyan"></a>
        <a href="teal" class="button2 color" style="background-color: teal"></a>
        <a href="green" class="button2 color" style="background-color: green"></a>
        <a href="yellow" class="button2 color" style="background-color: yellow"></a>
        <a href="orange" class="button2 color" style="background-color: orange"></a>
    </div>

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