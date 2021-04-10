<?php
include("userinfo_sub_admin.php");
?>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">

  
</svg>

<header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<section class="page-content">
  <section class ="grid">
    <article style="height: auto;">
      <div class="main__container" style="align-items: center;">
        <div class="main__title">
            <div class="main__greeting" >
              <img src="../images/png/MentalHealthForAll.png" alt="Trulli" width="1000" height="260">
            </div>
        </div>
     <?php 
        /*  include_once("../php/config.php");
          include_once("../php/sql.php");*/
     ?>
     
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>
</head>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Courses', 'Hours per Day'],
  ['Courses Enrolled', <?php echo $coursenumber; ?>],
  ['Courses in progress', 2],
  ['Courses Completed', 4]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'CMHA Courses', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
