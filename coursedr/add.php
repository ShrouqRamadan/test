<?php ob_start();?>
<?php include '../sharded/header.php';?>
<?php include '../general/functions.php';?>
<?php include '../sharded/nav.php';?>
<?php 
 if($_SESSION['admin']){

}else{
  header('location:/unii/admin/login.php');
}?>
<?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) { ?>
<?php  
if(isset($_POST['submit'])){
   $doctorid= $_POST['doctorid'];
    $courseid1= $_POST['courseid1'];
    $courseid2= $_POST['courseid2'];
    $courseid3= $_POST['courseid3'];
    $courseid4= $_POST['courseid4'];
    $insert="INSERT INTO coursedr VALUES(Null,$doctorid,$courseid1,$courseid2,$courseid3,$courseid4)";
    $i=mysqli_query($conn,$insert);
    message($i,"insert");
}
$select="SELECT * FROM doctor ";
$sq=mysqli_query($conn,$select);
#===========
$selectc="SELECT * FROM courses ";
$sql=mysqli_query($conn,$selectc);
 #======================
 $doctor="";
 $course1= "";
 $course2= "";
 $course3= "";
 $course4= "";
 $update=false;
 if(isset($_GET['edit'])){
 $update=true;
   $id=$_GET['edit'];
   $s="SELECT * FROM coursedr";
   $squ=mysqli_query($conn,$s);
   $row=mysqli_fetch_assoc($squ);
   $doctor=$row['doctorid'];
   $course1= $row['coursesid1'];
   $course2= $row['coursesid2'];
   $course3= $row['coursesid3'];  
   $course4= $row['coursesid4'];
   if(isset($_POST['update'])){
    $doctorid= $_POST['doctorid'];
    $courseid1= $_POST['courseid1'];
    $courseid2= $_POST['courseid2'];
    $courseid3= $_POST['courseid3'];
    $courseid4= $_POST['courseid4'];
    $up="UPDATE coursedr SET doctorid =$doctorid, coursesid1=$courseid1, coursesid2=$courseid2,coursesid3=$courseid3,coursesid4=$courseid4 WHERE id=$id";
    mysqli_query($conn,$up);

   header('location:/unii/coursedr/List.php');
   

 }
}
 #=================

?>
<?php ob_end_flush();?>

    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
    
     
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0"> <span>Welcome</span> <br> Course Dr registration Page</h1>
              
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
                <?php if($update) :?>   
                <h2> update Course Dr registration</h2>
                <?php else:?>   

                  <h2>Course Dr registration</h2>
                  <?php endif ;?> 

                  
                  <form  method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="text">Select Doctors Name:<?php echo $doctor?></label>
                      <select name="doctorid" id="" class="form-control" >
                      <option selected>select doctor</option>
                       <?php foreach($sq as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['name']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <!-- courseid1 -->
                    <div class="form-group">
                      <label for="name">Select 1st Course:<?php echo $course1?> </label>
                      <select name="courseid1" id="" class="form-control" >
                      <option selected>select course</option>

                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>">
                       <?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 2nd Course:<?php echo $course2?> </label>
                      <select name="courseid2" id="" class="form-control">
                      <option selected>select course</option>

                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>">
                       <?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select 3rd Course:<?php echo $course3?> </label>
                      <select name="courseid3" id="" class="form-control" >
                      <option selected>select course</option>

                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Select4th Course:<?php echo $course4?> </label>
                      <select name="courseid4" id="" class="form-control" >
                      <option selected>select course</option>

                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['cour']?></option>
                       <?php } ?>
                     </select>
                    </div>
                   
                    
                   
                
                  
                    <div class="form-group">
                    
                    <!-- <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div> -->
                    <div class="form-group">
                      <!-- <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message"> -->
                      <?php if($update):?>
                      <button name="update" class="btn btn-primary btn-lg">Update</button>
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