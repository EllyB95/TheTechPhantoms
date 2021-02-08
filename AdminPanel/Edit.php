<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">
</svg>
</head>

<body>
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
  <section class ="grid">
    <article style="height: 800px">
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <h1>Edit Student Information</h1>
            </div>
              <?php 
           include_once("../php/config.php");
           include_once("../php/sql.php");
           ?>
           <?php
            if(count($_POST)>0) {
              
              $query = "UPDATE cmhauser SET cmhauserid='" . $_POST['cmhauserid'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', emailaddress='" . $_POST['emailaddress'] . "' ,phonenumber='" . $_POST['phonenumber'] . "' WHERE cmhauserid='" . $_POST['cmhauserid'] . "'";
              if($result = pg_query($query)){
                echo "Record Updated Successfully.";
              }
              else{
                echo "Error.";
              }
              
            }
            $result = pg_query($db_connection,"SELECT * FROM cmhauser WHERE cmhauserid='" . $_GET['cmhauserid'] . "'");
            $row= pg_fetch_assoc($result);
            ?>
            <form name="frmUser" method="post" action="">
              <div><?php if(isset($message)) { echo $message; } ?>
              </div>
                User Id: <br>
                <input type="hidden" name="cmhauserid" class="txtField" value="<?php echo $row['cmhauserid']; ?>">
                <input type="text" name="cmhauserid"  value="<?php echo $row['cmhauserid']; ?>">
                <br>
                First Name: <br>
                <input type="text" name="firstname"  value= <?php echo $row['firstname']; ?>>
                <br>
                Last Name :<br>
                <input type="text" name="lastname"  value=<?php echo $row['lastname']; ?>>
                <br>
                Email Address:<br>
                <input type="text" name="emailaddress" value=<?php echo $row['emailaddress']; ?>>
                <br>
                Phone Number:<br>
                <input type="text" name="phonenumber" value=<?php echo $row['phonenumber']; ?>>
                <br>
                <input type="submit" name="submit" value="Submit" class="buttom">

            </form>
            </div>

    </article>
    </section>
  <footer class="page-footer">
  </footer>
</section>
</body>