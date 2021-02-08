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
              <h1>Add New Student</h1>
          <form method="post" action="Insert.php">
              User ID:<br>
              <input type="text" name="cmhauserid">
              <br>
              First name:<br>
              <input type="text" name="firstname">
              <br>
              Middle name:<br>
              <input type="text" name="middlename">
              <br>
              Last name:<br>
              <input type="text" name="lastname">
              <br>
              Email:<br>
              <input type="email" name="emailaddress">
              <br>
              Phone Number:<br>
              <input type="text" name="phonenumber">
              <br><br>
              <input type="submit" name="save" value="submit">
          </form>
    </article>
    </SECTION>
  <footer class="page-footer">
  </footer>
</section>
</body>