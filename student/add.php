<?php ob_start();?>
<?php include '../sharded/header.php';?>
<?php include '../general/functions.php';?>
<?php include '../sharded/nav.php';?>
<?php
if($_SESSION['admin']){

}else{
  header('location:/unii/admin/login.php');
}?>
<?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)){ ?>

  

<?php  

if(isset($_POST['submit'])){
   $name= $_POST['name'];
   $levelid= $_POST['levelid'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $insert="INSERT INTO `student` VALUES (NULL,'$name',$levelid,$phone,'$email','$pass')";
   
    $i=mysqli_query($conn,$insert);
    message($i,"insert");


}
$select="SELECT * FROM levels ";
$sql=mysqli_query($conn,$select);
#===================
$na= "";
  $le= "";
   $ph= "";
   $em= "";
   $pa= "";
   $update=false;
if(isset($_GET['edit'])){
  $update=true;
  $id=$_GET['edit'];
  $select="SELECT * FROM student WHERE id=$id";
  $sq=mysqli_query($conn,$select);
  $row=mysqli_fetch_assoc($sq);
  $na= $row['name'];
  $le= $row['levelid'];
   $ph= $row['phone'];
   $em= $row['email'];
   $pa= $row['password'];
   if(isset($_POST['update'])){
    $name= $_POST['name'];
    $levelid= $_POST['levelid'];
     $phone= $_POST['phone'];
     $email= $_POST['email'];
     $pass= $_POST['password'];
    $up="UPDATE student SET name='$name' , levelid=$levelid, phone=$phone, email='$email', password=$pass WHERE id=$id";
    mysqli_query($conn,$up);
   header('location:/unii/student/List.php');

   
   }
}
#===============


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
              <?php if($update) :?>
              <h1 class="mb0"><span>Welcome to</span><br>update Students Page</h1>
              <?php else :?>

              <h1 class="mb0"><span>Welcome to</span><br>Add Students Page</h1>
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
                <h2>update students </h2>
                <?php else :?> 

                  <h2>Add students </h2>
                <?php endif ;?> 


      
                  
                  <form  method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="text">Student Name</label>
                      <input value="<?php echo $na?>" name="name" type="text" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                    <label for="text">Select Level :<?php echo $le ?></label>
                     <select name="levelid" id="" class="form-control" >
                       <?php foreach($sql as $data) {?>
                       <option value="<?php echo $data ['id']?>"><?php echo $data ['years']?></option>
                       <?php } ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Phone Number</label>
                      <input value="<?php echo $ph?>" name="phone" type="tel" class="form-control" id="name" >
 
                    </div>
                
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input value="<?php echo $em?>" name="email" type="email" class="form-control" id="name" >
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input value="<?php echo $pa?>" name="password" type="password" class="form-control" id="name" >
                      </div>
                    <div class="form-group">
                    
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