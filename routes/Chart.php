
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "online-voting-system");
?>
<?php
  $query = "Select * from user where role=2";
  $query2="Select * from branch";
  $result = mysqli_query($conn,$query);
  $result2 = mysqli_query($conn,$query2);
  
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Group', 'no. of votes'],
            <?php
              while($chart = mysqli_fetch_assoc($result)){
                echo "['".$chart['name']."',".$chart['votes']."],";
              }

            ?>
        ]);

        var options = {
          title: 'Votes %ages'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Student', 'no. of votes'],
            <?php
              while($chart = mysqli_fetch_assoc($result2)){
                echo "['".$chart['Branch']."',".$chart['Count']."],";
              }

            ?>
        ]);

        var options = {
          title: 'Votes %ages(Branch Wise)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie2'));

        chart.draw(data, options);
      }
    </script>



  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <br>
    <hr>
    <br>
    <div id="pie2" style="width: 900px; height: 500px;"></div>
  </body>
</html>