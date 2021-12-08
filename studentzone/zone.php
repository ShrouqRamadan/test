<?php ob_start();?>
<?php include "../sharded/header.php"?>
<?php include "../sharded/navs.php"?>
<?php
if($_SESSION['student']){

}else{
  header('location:/unii/studentzone/login.php');
}
?> 
<?php

$select="SELECT * FROM  `registcourse`";
$sql=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($sql);
#========================
$select="SELECT * FROM  `student`";
$sqll=mysqli_query($conn,$select);
$roww=mysqli_fetch_assoc($sqll);
#============
?>


<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Welcome TO Student's Zone</h1>

            </div>
          </div>
        </div>
      </section>
<section class="probootstrap-section">
        <div class="container">

        <h2> <?php echo "Welcome " . $_SESSION["student"]?> </h2>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          
              <a href="table.php?table=<?php echo $row['id']?>" class="probootstrap-featured-news-box">
             
                <figure class="probootstrap-media"><img src="../image/calendar.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>View your Tables</h3>
                 
                  <span class="probootstrap-date"><i class="icon-calendar"></i>2021/2022</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="prof.php?prof=<?php echo $roww['id']?>" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="../image/graduation.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Your informatin</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>2021/2022</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="http://localhost/uni/studentzone/cour.php" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="../image/teacher.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>courses loctions</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>2021/2022</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>

            <div class="clearfix visible-md-block"></div>

            
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            
          
            <div class="clearfix visible-sm-block visible-xs-block"></div>

          </div>

        </div>
      </section>
<?php include "../sharded/footer.php"?>

</body>
</html>
<script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>
