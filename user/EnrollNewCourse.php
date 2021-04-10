<?php include 'userinfo_user.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <!-- <link href='../css/admin_table.css' rel='stylesheet' type="text/css" /> -->
  <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
  <link rel="stylesheet" id="site_styles-css" href="../css/main_styles.css?ver=1.7" type="text/css" media="all">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script>"></script>
  <svg style="display:none;"></svg>
  <script type="text/javascript">
    function myFunction(clicked_id,data) {
      $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: {
          action: 'enroll_this',
          course_id: clicked_id,
          Email: data
        },
        success: function(html) {
          location.reload();
        }

      });
    }
    function myFunction2(clicked_id,data) {
      $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: {
          action: 'add_to_cart',
          course_id: clicked_id,
          Email: data
        },
        success: function(html) {
          location.reload();
        }

      });
    }
  </script>
</head>

<body>
  <div class="row">
    
      <header class="page-header">
        <?php include 'LeftMenu.php'; ?>

      </header>
    </div>
    <div class="page-content">
      <div class="grid" style="margin-top: 50px">
        <article style="height: auto;">
          <div class="main__container">
            <div class="main__title">
              <div class="main__greeting">
                <h2 style="margin: 30px" >Courses Available to Enroll</h2>
              </div>
            </div>
            <div class="container" style="margin-top: 30px" style="margin-bottom: 30px">
              <div class="row">

                <?php include '../config.php';?>
                <?php
                $sql = pg_query(sprintf("SELECT * FROM public.courses where course_id NOT IN (select course_id From public.enroll where emailaddress='".$_SESSION['EmailStudent']."');"));
               $count = 0;

                while ($row = pg_fetch_assoc($sql)) {
                  $count = $count + 1;
                  echo "
                          <div class='col-12 col-md-6 card-container'>
                            <div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
                              <div class='location-meta' data-location='online'></div>
                              <div class='tags' data-filter-target='' data-tags='online'></div>
                              <div class='card__header'>
                                <div class='card__title title-4 tribe-events-single-event-title'>" . htmlspecialchars($row['course_name']) . "</div> 
                                </div>

                              <div class='card__body small'>
                                <table class='details'>
                                  <tbody>
                                    <tr>
                                      <th>Start</th>
                                      <td>" . htmlspecialchars($row['start_date']) . "</td>
                                    </tr>
                                    <tr>
                                      <th>End</th>
                                      <td>" . htmlspecialchars($row['end_date']) . "</td>
                                    </tr>
                                    <tr>
                                      <th>Description</th>
                                      <td>" . htmlspecialchars($row['description']) . "</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                              <div class='card__footer'>";

                              // Sql Query to find 
                              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.cart where course_id='".$row['course_id']."' and emailaddress='".$_SESSION['EmailStudent']."';")));

                              if($row['capacity']>$row['currently_enrolled'] && empty($sql2))
                              {
                              echo "<button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction(this.id,this.data)'>Enroll</button><button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction2(this.id,this.data)'>Add to Cart</button>";
                              }
                              // cart data 
                              else if (!empty($sql2))
                              {
                                echo "<button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction(this.id,this.data)' disabled>Added to cart</button>";
                              }
                              else
                              {
                                echo "<button class='btn btn-primary' id='class_full' disabled>Class Full</button>";
                              }
                              echo "</div>
                            </div><!-- #tribe-events-content -->
                          </div>";
                }

                echo "</div><br>";

                if ($count == 0)
                    echo "<center><p>No course available to enroll</p></center>";

                ?>

            </div>
            </div>
          </div>
        </article>
      </div>
    </div>

<footer class="page-footer">
</footer>

</body>
</html>