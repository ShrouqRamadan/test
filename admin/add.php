
<?php include '../sharded/header.php';?>
<?php include '../sharded/nav.php';?>
<?php include '../general/functions.php';?>
<?php
if($_SESSION['admin']){

}else{
  header('location:/unii/admin/login.php');
}?>
<?php if ($_SESSION['role']==0){?>


<?php   
if(isset($_POST['signup'])){
  $name=$_POST['name'];
  $password=$_POST['password'];
  $role=$_POST['roo'];
  $insert="INSERT INTO `admin` VALUES(null,'$name','$password', $role)";
  $sql=mysqli_query($conn,$insert);
  message($sql,"insert");
}
#=============

?>



<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Add admin Page</h1>
            </div>
          </div>
        </div>
      </section>
    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
       <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Sign up</h2>
                  
                  <form  method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="text">your Name</label>
                      <input  name="name" type="text" class="form-control" id="email" >
                    </div>

                      <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="name" >
                      </div>
                      <div class="form-group">
                    access <input name="roo" type="radio" class="" value="0" > 
                     simi access <input name="roo" type="radio" class="" value="1" >
                        Read Only <input name="roo" type="radio" class="" value="2" >
                      </div>
                    <div class="form-group">
                    
                 
                    <div class="form-group">
                      <button name="signup" class="btn btn-primary btn-lg">Sign up</button>
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
    } ?>

    

    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>