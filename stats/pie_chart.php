<?php

include '../backend/database/connect.php';

// Red
$selectRed = "SELECT red FROM statistics";

$result = mysqli_query($db, $selectRed)
or die('Error '.mysqli_error($db).' with query '.$selectRed);

$red =[];

while($row = mysqli_fetch_assoc($result))
{
    $red[] = $row;
}

foreach ($red as $usedRed){
    $red = $usedRed['red'];
}

// Purple
$selectPurple = "SELECT purple FROM statistics";

$result = mysqli_query($db, $selectPurple)
or die('Error '.mysqli_error($db).' with query '.$selectPurple);

$purple =[];

while($row = mysqli_fetch_assoc($result))
{
    $purple[] = $row;
}

foreach ($purple as $usedPurple){
    $purple = $usedPurple['purple'];
}

// Dark Blue
$selectDarkBlue = "SELECT darkblue FROM statistics";

$result = mysqli_query($db, $selectDarkBlue)
or die('Error '.mysqli_error($db).' with query '.$selectDarkBlue);

$darkblue =[];

while($row = mysqli_fetch_assoc($result))
{
    $darkblue[] = $row;
}

foreach ($darkblue as $usedDarkBlue){
    $darkblue = $usedDarkBlue['darkblue'];
}

// Blue
$selectBlue = "SELECT blue FROM statistics";

$result = mysqli_query($db, $selectBlue)
or die('Error '.mysqli_error($db).' with query '.$selectBlue);

$blue =[];

while($row = mysqli_fetch_assoc($result))
{
    $blue[] = $row;
}

foreach ($blue as $usedBlue){
    $blue = $usedBlue['blue'];
}

// Cyan
$selectCyan = "SELECT cyan FROM statistics";

$result = mysqli_query($db, $selectCyan)
or die('Error '.mysqli_error($db).' with query '.$selectCyan);

$cyan =[];

while($row = mysqli_fetch_assoc($result))
{
    $cyan[] = $row;
}

foreach ($cyan as $usedCyan){
    $cyan = $usedCyan['cyan'];
}

// Turqoise
$selectTurqoise = "SELECT turqoise FROM statistics";

$result = mysqli_query($db, $selectTurqoise)
or die('Error '.mysqli_error($db).' with query '.$selectTurqoise);

$turqoise =[];

while($row = mysqli_fetch_assoc($result))
{
    $turqoise[] = $row;
}

foreach ($turqoise as $usedTurqoise){
    $turqoise = $usedTurqoise['turqoise'];
}

// Green
$selectGreen = "SELECT green FROM statistics";

$result = mysqli_query($db, $selectGreen)
or die('Error '.mysqli_error($db).' with query '.$selectGreen);

$green =[];

while($row = mysqli_fetch_assoc($result))
{
    $green[] = $row;
}

foreach ($green as $usedGreen){
    $green = $usedGreen['green'];
}

// Yellow
$selectYellow = "SELECT yellow FROM statistics";

$result = mysqli_query($db, $selectYellow)
or die('Error '.mysqli_error($db).' with query '.$selectYellow);

$yellow =[];

while($row = mysqli_fetch_assoc($result))
{
    $yellow[] = $row;
}

foreach ($yellow as $usedYellow){
    $yellow = $usedYellow['yellow'];
}

// Orange
$selectOrange = "SELECT orange FROM statistics";

$result = mysqli_query($db, $selectOrange)
or die('Error '.mysqli_error($db).' with query '.$selectOrange);

$orange =[];

while($row = mysqli_fetch_assoc($result))
{
    $orange[] = $row;
}

foreach ($orange as $usedOrange){
    $orange = $usedOrange['orange'];
}

?>



<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Color');
          data.addColumn('number', 'Times_used');
          data.addRows([
              ['Red', <?php print_r($red) ?>],
              ['Purple', <?php print_r($purple) ?>],
              ['Dark Blue', <?php print_r($darkblue) ?>],
              ['Blue', <?php print_r($blue) ?>],
              ['Cyan', <?php print_r($cyan) ?>],
              ['Turquoise', <?php print_r($turqoise) ?>],
              ['Green', <?php print_r($green) ?>],
              ['Yellow', <?php print_r($yellow) ?>],
              ['Orange', <?php print_r($orange) ?>]


          ]);

          // Set chart options
          var options = {
                        'title':'Color popularity',
                        'width':400,
                        'height':300,
                        colors: ['#FF0000', '#800080', '#000080', '#0072FF', '#00FFFF', '#40E0D0', '#008000', '#FFFF00', '#FFA500']};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>