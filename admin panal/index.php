<?php include "../sharded/header.php"?>
<?php include "../sharded/nav.php"?>
<?php
if($_SESSION['admin']){

}else{
 header('location:/unii/admin/login.php');
}
?>
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Welcome TO Admin Panal :<?php echo   $_SESSION["admin"]?></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/student/list.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrDyWlTma4XwMctq0Oqj5Wqt2cCQobo6lk4A&usqp=CAU" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>List OF Student</h3>
                  
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/doc/List.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://icon-library.com/images/teacher-icon-png/teacher-icon-png-17.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>List Of Doctors</h3>
                  
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/courses/List.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://www.stortfordbadminton.net/wp-content/uploads/2017/08/form.png" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>List Of Courses</h3>
                  
                </div>
              </a>
            </div>

            <div class="clearfix visible-md-block"></div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/apply/list.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://www.pinclipart.com/picdir/middle/199-1999640_admission-icon-museum-draw-clipart.png" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>List Of Applications</h3>
                  
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/levels/list.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://cdn4.iconfinder.com/data/icons/education-628/100/Education_Level-512.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Levels</h3>
                  
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="/unii/coursedr/list.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img style="height: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlLvHDTNsPMHEhruAKajkrh21vUXPdlgQrzREwSZttpKP3IQT11NAvx4j2De3dv_TJITE&usqp=CAU" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>List Of Courses of doctors</h3>
               
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>

          </div>
        </div>
      </section>
      
      

</body>
</html>
<script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>
