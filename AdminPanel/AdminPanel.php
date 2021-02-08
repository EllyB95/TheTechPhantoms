<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">

  
</svg>

<header class="page-header">
  <nav>
    <a href="AdminPanel.php">
      <img class="logo" src="../images/png/cropped-RecoveryCollege_Favicon-180x180.png" alt="Recovery College logo">
    </a>   
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      </li>
      <li>
        <a href="AdminPanel.php">
            <span class="iconify" data-icon="fa-solid:house-user" data-inline="false"></span>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="CourseInformation.php">
            <span class="iconify" data-icon="mdi:bookshelf" data-inline="false"></span>
          <span>Course Information</span>
        </a>
      </li>
      <li>
        <a href="StudentContact.php">
            <span class="iconify" data-icon="mdi:contacts" data-inline="false"></span>
          <span>Students</span>
        </a>
      </li>
      <li>
        <a href="Reporting.php">
            <span class="iconify" data-icon="dashicons:admin-page" data-inline="false"></span>
          <span>Reporting</span>
        </a>
      </li>
        <li>
        <a href="NewsPost.php">
            <span class="iconify" data-icon="fluent:news-20-regular" data-inline="false"></span>
            <span>NEWS Post Creation</span>
          </a>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="mdi:account-cash" data-inline="false"></span>
            <span>Training Opportunities</span>
          </a>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="ic:baseline-meeting-room" data-inline="false"></span>
            <span>Meeting Agenda</span>
          </a>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="ls:memo" data-inline="false"></span>
            <span>Weekly Memo</span>
          </a>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="mdi:view-comfy" data-inline="false"></span>
            <span>Availability Pool</span>
          </a>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="fa:wpforms" data-inline="false"></span>
            <span>Forms</span>
          </a>
      </li>
      <li class="menu-heading">
        <h3>Settings</h3>
      </li>
      <li>
        <a href="#0">
            <span class="iconify" data-icon="simple-line-icons:settings" data-inline="false"></span>
          <span>Settings</span>
        </a>
      </li>   
      <br>
    </ul>
  </nav>
</header>
<section class="page-content">
  <section class="grid">
    <article>
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <h1>Admin Dashboard</h1>
              <p>Welcome to your CMHA admin dashboard</p>
            </div>
            </div>
     <?php 
          include_once("../php/config.php");
          include_once("../php/sql.php");
     ?>
    </article>
  
    <div class="main__cards">
      <div class="card">
        
        <div class="card_inner">
          <p class="text-primary-p">Students Enrolled</p>
          <span class="font-bold text-title"> <?php echo $StudentNumberRes; ?></span>
        </div>
      </div>

      <div class="card">
        
        <div class="card_inner">
          <p class="text-primary-p">Couses Available</p>
          <span class="font-bold text-title"><?php echo $coursenumber; ?></span>
        </div>
      </div>

      <div class="card">
        
        <div class="card_inner">
          <p class="text-primary-p">Site Visits</p>
          <span class="font-bold text-title">0</span>
        </div>
      </div>

      <div class="card">

        <div class="card_inner">
          <p class="text-primary-p">New Student enrolled</p>
          <span class="font-bold text-title">0</span>
        </div>
      </div>
    </div>
    <article>
      <div id="piechart"></div>
      <!--
      <div class="charts">
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Daily Reports</h1>
                  <p>CMHA, Edmonton, CA</p>
                </div>
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>
              <div id="apex1"></div>
            </div> -->
            <!-- CHARTS ENDS HERE -->
        </div>
    </article>
    <article></article>
  </section>
  <footer class="page-footer">
  </footer>
</section>
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
