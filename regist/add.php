<?php ob_start();?>
<?php include '../sharded/header.php';?>
<?php include '../sharded/nav.php';?>
<?php include '../general/functions.php';?>
<?php
if($_SESSION['admin']){

}else{
  header('location:/unii/admin/login.php');
}?>
<?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>

<?php  
if(isset($_POST['submit'])){
  $studentid= $_POST['studentid'];
  $level= $_POST['level'];
   $courseid1= $_POST['courseid1'];
   $courseid2= $_POST['courseid2'];
   $courseid3= $_POST['courseid3'];
   $courseid4= $_POST['courseid4'];
   $courseid5= $_POST['courseid5'];
   $courseid6= $_POST['courseid6'];
   $courseid7= $_POST['courseid7'];
$insert="INSERT INTO registcourse VALUES(Null,$studentid,$level,$courseid1,$courseid2,$courseid3,$courseid4,$courseid5,$courseid6,$courseid7)";
   $i=mysqli_query($conn,$insert);
   message($i,"insert");
}
#================================
$select="SELECT * FROM levels ";
$sq=mysqli_query($conn,$select);
#===========
$selectc="SELECT * FROM courses ";
$sql=mysqli_query($conn,$selectc);
#==========================
$selects="SELECT * FROM `student` ";
$sqs=mysqli_query($conn,$selects);
#=====================
$student= "";
$levels= "";
    $course1= "";
    $course2= "";
    $course3= "";
    $course4= "";
    $course5= "";
    $course6= "";
    $course7= "";
    $update=false;
if(isset($_GET['edit'])){
  $update=true;
  $id=$_GET['edit'];
  $selectt="SELECT * FROM registcourse WHERE id=$id";
  $ss=mysqli_query($conn,$selectt);
  $row=mysqli_fetch_assoc($ss);
  $student= $row['studentid'];
  $levels= $row['levelid'];
    $course1= $row['courseid1'];
    $course2= $row['courseid2'];
    $course3= $row['courseid3'];
    $course4= $row['courseid4'];
    $course5= $row['courseid5'];
    $course6= $row['courseid6'];
    $course7= $row['courseid7'];
if(isset($_POST['update'])){
  $studentid= $_POST['studentid'];
  $level= $_POST['level'];
    $courseid1= $_POST['courseid1'];
    $courseid2= $_POST['courseid2'];
    $courseid3= $_POST['courseid3'];
    $courseid4= $_POST['courseid4'];
    $courseid5= $_POST['courseid5'];
    $courseid6= $_POST['courseid6'];
    $courseid7= $_POST['courseid7'];
  $up="UPDATE registcourse SET studentid=$studentid , levelid=$level courseid1=$courseid1, courseid2=$courseid2, courseid3=$courseid3, courseid4=$courseid4, courseid4=$courseid4, courseid5=$courseid5, courseid6=$courseid6, courseid7=$courseid7 WHERE id=$id";
    mysqli_query($conn,$up);
    header('location:/unii/regist/list.php');

  
}

}
#=================

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
      
    
   
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0"> <span>Welcome</span> <br> Course registration Page</h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Course registration</h2>
                  
                  <form  method="post" class="probootstrap-form">
                  <div class="form-group">
                      <label for="text">Select Student id<?php echo $student ?></label>
                      <select name="studentid" id="" class="form-control" >
                       <?php foreach($sqs as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['id']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="text">Select Level:<?php echo $levels ?></label>
                      <select name="level" id="" class="form-control" >
                       <?php foreach($sq as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['years']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <!-- courseid1 -->
                    <div class="form-group">
                      <label for="name">Select 1st Course:<?php echo $course1 ?> </label>
                      <select name="courseid1" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 2nd Course:<?php echo $course2 ?> </label>
                      <select name="courseid2" id="" class="form-control">
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 3rd Course:<?php echo $course3?> </label>
                      <select name="courseid3" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select4th Course:<?php echo $course4 ?> </label>
                      <select name="courseid4" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 5th Course:<?php echo $course5 ?> </label>
                      <select name="courseid5" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 6th Course:<?php echo $course6 ?> </label>
                      <select name="courseid6" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 7th Course:<?php echo $course7 ?> </label>
                      <select name="courseid7" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>

                    <div class="form-group">
                    <div class="form-group">
                      <?php if($update) :?>
                      <button name="update" class="btn btn-primary btn-lg">Update </button>
                      <?php else :?>
                      <button name="submit" class="btn btn-primary btn-lg">Send </button>
                      <?php endif ;?>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
     

    </div>
    <!-- END wrapper -->
    
    <?php }
    else{
     echo "<img src='https://i1.wp.com/saedx.com/blog/wp-content/uploads/2019/01/saedx-blog-featured-70.jpg?fit=1200%2C500&ssl=1'>";
     }
     ?>
    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>
