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


    <div class="colorpicker">
        <form action="../../backend/database/insertdb.php" method="POST">
            <input type="submit" name="colorsubmit" style="margin: 10px;">
            <div class="colorpicker-container">
                <button type="button" value="red" name="color" class="button2 color" id="red"></button>
                <button type="button" value="purple" name="color" class="button2 color" id="purple"></button>
                <button type="button" value="blue" name="color" class="button2 color" id="blue"></button>
                <button type="button" value="navy" name="color" class="button2 color" id="navy"></button>
                <button type="button" value="cyan" name="color" class="button2 color" id="cyan"></button>
                <button type="button" value="teal" name="color" class="button2 color" id="teal"></button>
                <button type="button" value="green" name="color" class="button2 color" id="green"></button>
                <button type="button" value="yellow" name="color" class="button2 color" id="yellow"></button>
                <button type="button" value="orange" name="color" class="button2 color" id="orange"></button>
            </div>
        </form>
    </div>


    <div class="colorpicker" style="left:100px">
        <form action="../../backend/database/insertdb.php" method="POST">
            <input type="submit" name="colorsubmit" style="margin: 10px;">
            <div class="colorpicker-container">

                <label class="checkmark-container">
                    <input type="radio" value="red" name="color" class="button2 color" id="red">
                    <span class="checkmark button2 color" id="red"></span>
                </label>
                <label class="checkmark-container">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="checkmark-container">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="checkmark-container">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>


            </div>
        </form>
    </div>




</main>

<!--footer-->
<?php include '../../includes/footer.php'; ?>

</body>
</html>