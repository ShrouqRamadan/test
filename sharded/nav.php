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
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      <div class="fixed-top ">
     
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
            <img  class="" style="width:70px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAwu6A2S_Djwe0bXPgXsV71zM8ZsFw2o98JA&usqp=CAU" alt=""> 
            <a class="" style="color:green" href="/unii/admin%20panal/index.php" title="uiCookies:Enlight">Admin Panal</a>
          </div>
           <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <?php if(isset($_SESSION['admin'])):?>
                <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Students</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/student/add.php">Add Students</a></li>
                  <?php }?>
                  <li><a href="/unii/student/list.php">List Students</a></li>
                
                  <li><a href="/unii/student/search.php">Search</a></li>
                  
                </ul>
               </li>
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Doctors</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/doc/add.php">Add Doctors</a></li>
                  <?php }?>
                  <li><a href="/unii/doc/List.php">List Doctors</a></li>
                  <li><a href="/unii/doc/search.php">Search</a></li>
                </ul>
               </li>
               <li class="dropdown">
               <a href="#" data-toggle="dropdown" class="dropdown-toggle">Locations</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/location/add.php">Add</a></li>
                  <?php }?>
                  <li><a href="/unii/location/list.php">List</a></li>
                </ul>
                </li>
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">courses</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/courses/add.php">Add courses</a></li>
                  <?php }?>
                  <li><a href="/unii/courses/List.php">List courses</a></li>
                  

                </ul>
               </li>
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses Dr</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/coursedr/add.php">Add Courses Dr</a></li>
                  <?php }?>
                  <li><a href="/unii/coursedr/list.php">List Courses Dr</a></li>
                </ul>
               </li>
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Registration</a>
                <ul class="dropdown-menu">
                <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
                  <li><a href="/unii/regist/add.php">Add</a></li>
                  <?php }?>
                  <li><a href="/unii/regist/list.php">List</a></li>
                  
                </ul>
                </li>
              
              <li><a href="/unii/levels/list.php">Levels</a></li>
              <li><a href="/unii/apply/list.php">applications</a></li>
              </li>
              <?php if($_SESSION['role']==0) {?>
               
              <li class=""><a href="/unii/admin/add.php">Add admin</a></li>
             <?php }?>

              </li>              
              <li><form action="">
                <button  name="logout"  class="btn btn-danger" >logout</button>
                </form></li>
              <?php else : ?>
              
              <li>
                <form action="">
                <button class="btn btn-primary"><a href="/unii/admin/login.php">login</a></button>
              </form>
              </li>
              <?php endif ;?>
              
              
                  
                </ul>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    </div>
