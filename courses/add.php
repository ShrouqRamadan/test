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
   $name= $_POST['name'];
   $abbreviation= $_POST['abbreviation'];
   $locationid= $_POST['location'];
   $dayid= $_POST['day'];
   $time1= $_POST['time1'];
   $time2= $_POST['time2'];
   $insert="INSERT INTO courses VALUES(Null,'$name','$abbreviation',$locationid,$dayid,$time1,$time2)";
    $i=mysqli_query($conn,$insert);
    message($i,"insert");
}
#===============
$sello="SELECT * FROM `location`";
$sqli=mysqli_query($conn,$sello);
#===============
$selti="SELECT * FROM `time`";
$sqlii=mysqli_query($conn,$selti);
#===============
$selda="SELECT * FROM `days`";
$sq=mysqli_query($conn,$selda);
#===============
$na= "";
$ab= "";
$lo= "";
  $da="";
  $t1="";
  $t2="";
$update=false;
if(isset($_GET['edit'])){
$update=true;
  $id=$_GET['edit'];
  $select="SELECT * FROM courses WHERE id=$id";
  $sql=mysqli_query($conn,$select);
  $row=mysqli_fetch_assoc($sql);
  $na= $row['cour'];
  $ab= $row['abbreviation'];
  $lo= $row['locationid'];
  $da= $row['dayid'];
  $t1= $row['timeid1'];
  $t2= $row['timeid2'];
   if(isset($_POST['update'])){
    $name= $_POST['name'];
    $abbreviation= $_POST['abbreviation'];
    $locationid= $_POST['location'];
    $dayid= $_POST['day'];
    $time1= $_POST['time1'];
    $time2= $_POST['time2'];
    $up="UPDATE courses SET cour='$name', abbreviation='$abbreviation', locationid=$locationid, dayid=$dayid , timeid1=$time1 ,timeid2=$time2 WHERE id=$id";
    mysqli_query($conn,$up);
  header('location:/unii/courses/List.php');

    // message($i,"Update");
   }

}
?>


<?php ob_end_flush();?>
    
      
     
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <?php if($update) :?>
              <h1 class="mb0">update Course Page</h1>
              <?php else :?>

              <h1 class="mb0">Add Course Page</h1>
<?php endif ;?>
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
                  <h2>update Course Page</h2>
                  <?php else : ?>
                  <h2>Add Course Page</h2>
                  <?php endif ;?>

                  
                  <form  method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="text">Course Name</label>
                      <input value="<?php echo $na?>" name="name" type="text" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                      <label for="text">Course abbreviation</label>
                      <input value="<?php echo $ab?>" name="abbreviation" type="text" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                    <label for="text">Select Location:<?php echo $lo ?></label>
                     <select name="location" id="" class="form-control" >
                     <option selected>Select location</option>

                       <?php foreach($sqli as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['room']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                    <label for="text">Select Day:<?php echo $da ?></label>
                     <select name="day" id="" class="form-control" >
                     <option selected>Select Day</option>
                       <?php foreach($sq as $data) {?>
                        
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['day']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                    <label for="text">Start At:<?php echo $t1 ?></label>
                     <select name="time1" id="" class="form-control" >
                     <option selected>Select time</option>

                         
                       <?php foreach($sqlii as $data) {?>
                        
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['time']?></option>
                       <?php } ?>
                     </select>
                    </div>
                
                    <div class="form-group">
                    <label for="text">End At:<?php echo $t2 ?></label>
                     <select name="time2" id="" class="form-control" >
                     <option selected>Select time</option>
                         
                       <?php foreach($sqlii as $data) {?>
                        
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['time']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    
                    
                    <!-- <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div> -->
                    <div class="form-group">
                      <!-- <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message"> -->
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