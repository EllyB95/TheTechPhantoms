
<nav>
      <a href="MyCourses.php">
        <img class="logo" src="../images/png/cropped-RecoveryCollege_Favicon-180x180.png" alt="Recovery College logo">
      </a>   
      <ul class="admin-menu">
       
        <li>
          <?php include '../config.php';?>
          <?php 
              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.cmhauser where emailaddress='".$EmailStudent."' ;")));
              echo"<h4>Welcome ".$sql2['firstname']. " </h4>"
              ?>
        </li>
        <li>
          <a href="MyCourses.php">
              <span class="iconify" data-icon="raphael:books" data-inline="false"></span>
            <span>My Courses</span>
          </a>
        </li>
        <li>
          <a href="EnrollNewCourse.php">
              <span class="iconify" data-icon="mdi:bookshelf" data-inline="false"></span>
            <span>Enroll New Course</span>
          </a>
        </li>
        <li>
          <a href="MyCart.php">
              <span class="iconify" data-icon="fluent:cart-16-regular" data-inline="false"></span>
            <span>My Cart</span>
          </a>
        </li>
        <li>
          <a href="MyAccount.php">
              <span class="iconify" data-icon="ic:twotone-account-box" data-inline="false"></span>
            <span>My Account</span>
          </a>
        </li>
        <li>
          <a href="AcademicSupport.php">
              <span class="iconify" data-icon="si-glyph:customer-support" data-inline="false"></span>
              <span>Academic Support</span>
            </a>
        </li>
        <li>
        <a href="StudentChangePassword.php">
            <span class="iconify" data-icon="wpf:password1" data-inline="false"></span>
            <span>Change Password</span>
          </a>
      </li> 
        <li>
          <a href="logout_user.php" ><button type="button"><h4>Sign Out</h4></button>  </a>
        </li>
        <br>
      </ul>
    </nav>