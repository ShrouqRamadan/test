<?php include '../sharded/header.php';?>
<?php include '../general/functions.php';?>
<?php include '../sharded/navs.php';?>
<?php  
if(isset($_POST['submit'])){
   $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $ni= $_POST['nationalid'];
    $degree= $_POST['degree'];
    $insert="INSERT INTO `apply` VALUES(Null,'$name',$phone,'$email',$ni,'$degree')";
    $i=mysqli_query($conn,$insert);
    message($i,"admisstion");

}

?>



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
              <h1 class="mb0"><span>Welcome to</span><br> University ADMISSION 2021/2022</h1>
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
                  <h2>Fill The Form</h2>
                  
                  <form  method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="text">Full Name</label>
                      <input  name="name" type="text" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                      <label for="name">Phone Number</label>
                      <input name="phone" type="tel" class="form-control" id="name" >
                    </div>
                
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="name" >
                      </div>
                      <div class="form-group">
                        <label for="email">National ID</label>
                        <input name="nationalid" type="text" class="form-control" id="name" >
                      </div>
                      <div class="form-group">
                        <label for="email">High school degree</label>
                        <input name="degree" type="text" class="form-control" id="name" >
                      </div>
                      

                      
                    <div class="form-group">
                    
                  
                    <div class="form-group">
                     
                      <button name="submit" class="btn btn-primary btn-lg">Send </button>
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
    

    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>