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
        <form action="../../backend/database/insertdb.php" method="POST">
            <button type="button" value="red" name="color" class="button2 color" id="red"></button>
            <button type="button" value="purple" name="color" class="button2 color" id="purple"></button>
            <button type="button" value="blue" name="color" class="button2 color" id="blue"></button>
            <button type="button" value="navy" name="color" class="button2 color" id="navy"></button>
            <button type="button" value="cyan" name="color" class="button2 color" id="cyan"></button>
            <button type="button" value="teal" name="color" class="button2 color" id="teal"></button>
            <button type="button" value="green" name="color" class="button2 color" id="green"></button>
            <button type="button" value="yellow" name="color" class="button2 color" id="yellow"></button>
            <button type="button" value="orange" name="color" class="button2 color" id="orange"></button>
            <input type="submit" name="colorsubmit">
        </form>
    </div>


</main>

<!--footer-->
<?php include '../../includes/footer.php'; ?>

</body>
</html>