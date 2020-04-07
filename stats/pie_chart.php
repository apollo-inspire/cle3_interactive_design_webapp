<?php

include '../backend/database/connect.php';

$selectAllColors = "SELECT * FROM statistics";
$result = mysqli_query($db, $selectAllColors)
or die('Error '.mysqli_error($db).' with query '.$selectAllColors);

$colorStats = [];

while($row = mysqli_fetch_assoc($result)) {
    $colorStats = $row;
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
              ['Red', <?php print_r($colorStats['red']) ?>],
              ['Purple', <?php print_r($colorStats['purple']) ?>],
              ['Dark Blue', <?php print_r($colorStats['darkblue']) ?>],
              ['Blue', <?php print_r($colorStats['blue']) ?>],
              ['Cyan', <?php print_r($colorStats['cyan']) ?>],
              ['Turquoise', <?php print_r($colorStats['turqoise']) ?>],
              ['Green', <?php print_r($colorStats['green']) ?>],
              ['Yellow', <?php print_r($colorStats['yellow']) ?>],
              ['Orange', <?php print_r($colorStats['orange']) ?>]


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