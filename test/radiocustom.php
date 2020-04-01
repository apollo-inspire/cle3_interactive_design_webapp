<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <link href="../css/style.css" type="text/css" rel="stylesheet">-->
<!--    <link href="../css/background.css" type="text/css" rel="stylesheet">-->
    <link href="radiocustom.css" type="text/css" rel="stylesheet">
    <title>LEDopafval</title>
</head>
<body>

<!--header-->
<?php include '../includes/header/header_1down.php'; ?>


<main>


    <h1>Custom Radio Buttons</h1>
    <label class="container">One
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="container">Two
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="container">Three
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="container">Four
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>


<!--    <div class="colorpicker">-->
<!--        <form action="../backend/database/insertdb.php" method="POST">-->
<!--            <input type="submit" name="colorsubmit" style="margin: 10px;">-->
<!--            <div class="colorpicker-container">-->
<!---->
<!--                <label class="checkmark-container">-->
<!--                    <input type="radio" value="red" name="color" class="button2 color" id="red">-->
<!--                    <span class="checkmark button2 color" id="red"></span>-->
<!--                </label>-->
<!--                <label class="checkmark-container">-->
<!--                    <input type="radio" value="purple" name="color" class="button2 color" id="purple">-->
<!--                    <span class="checkmark button2 color" id="purple"></span>-->
<!--                </label>-->
<!--                <label class="checkmark-container" style="right: 100px;">-->
<!--                    <input type="radio" value="blue" name="color" class="button2 color" id="blue">-->
<!--                    <span class="checkmark button2 color" id="blue"></span>-->
<!--                </label>-->
<!---->
<!---->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->


    <div class="colorpicker" style="left: 100px">
        <form action="../backend/database/insertdb.php" method="POST">
            <input type="submit" name="colorsubmit" style="margin: 10px;">
            <div class="colorpicker-container">

                <label class="checkmark-container" id="red">
                    <input type="radio" value="red" name="color">
                    <span class="checkmark button2 color" id="red"></span>
                </label>


            </div>
        </form>
    </div>

    <div class="colorpicker" style="left: 100px; bottom: 300px">
        <form action="../backend/database/insertdb.php" method="POST">
            <input type="submit" name="colorsubmit" style="margin: 10px;">
            <div class="colorpicker-container">

                <label class="checkmark-container ">
                    <input type="radio" value="red" name="color">
                    <span class="checkmark button2 color red"></span>
                </label>
                <label class="checkmark-container ">
                    <input type="radio" value="red" name="color">
                    <span class="checkmark button2 color red"></span>
                </label>


            </div>
        </form>
    </div>




</main>

</body>
</html>
