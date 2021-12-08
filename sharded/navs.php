<?php ob_start();?>

<?php
$host="localhost";
$user="root";
$password="";
$dbname="uni";
$conn=mysqli_connect($host,$user,$password,$dbname);
#=======================
?>
<?php
session_start();
if(isset($_GET['logout'])){
  
  session_unset();
  session_destroy();

}

?>
<?php ob_end_flush();?>
 <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
<div class="fixed-top ">
      <div class="probootstrap-header-top ">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
              <span><i class="icon-phone2"></i>+1-123-456-7890</span>
              <span><i class="icon-mail"></i>info@uicookies.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar ">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="uiCookies:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/unii/studentzone/index.php">Home</a></li>
              <li><a href="#about">About Uni</a></li>
              <li><a href="#course">Our Courses</a></li>
              <li><a href="#questions">Questions</a></li>
              <li><a href="#footer">Footer</a></li>
              <?php  if(isset($_SESSION['student'])) :?>
              <li><a href="/unii/studentzone/zone.php">Student's Zone</a></li>



             
              
               <li>
                 <form action="">
                 <button class="btn btn-danger" name="logout">logout</button>
                 </form>
               </li>    
              <?php  else :?>

               <li>
                 <form action="">
                 <button class="btn btn-primary"><a href="/unii/studentzone/login.php">login</a></button>
                 </form>
                </li>
               <?php  endif ;?>

                </ul>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </div>