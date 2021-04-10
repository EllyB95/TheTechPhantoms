
<nav>
    <a href="AdminPanel.php">
      <img class="logo" src="../images/png/cropped-RecoveryCollege_Favicon-180x180.png" alt="Recovery College logo">
    </a>   
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>
          <?php include '../config.php';?>
             <?php 
              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.admin where email='".$EmailAdmin."' ;")));
              echo"<h1>Welcome  ".$sql2['first_name']. " </h1>"
              ?>
                
        </h3>
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
        <a href="AddCourses.php">
            <span class="iconify" data-icon="raphael:books" data-inline="false"></span>
            <span>Add Courses</span>
          </a>
      </li> 
      <li>
        <a href="AddNewStudent.php">
            <span class="iconify" data-icon="whh:student" data-inline="false"></span>
            <span>Add Student</span>
          </a>
      </li> 
      <li>
        <a href="AddSubAdmin.php">
            <span class="iconify" data-icon="subway:admin-1" data-inline="false"></span>
            <span>Add Sub Admin</span>
          </a>
      </li> 
      <li>
        <a href="AdminChangePassword.php">
            <span class="iconify" data-icon="wpf:password1" data-inline="false"></span>
            <span>Change Password</span>
          </a>
      </li> 
      
      
      <li>
          <a href="logout_admin.php" class="btn btn-danger"><button type="button"><h4>Sign Out</h4></button>  </a>
        </li>
      <br>
    </ul>
  </nav>