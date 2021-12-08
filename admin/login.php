
<?php include '../sharded/header.php';?>
<?php include '../sharded/nav.php';?>
<?php include '../general/functions.php';?>
<?php  

if(isset($_POST['login'])){
  $name=$_POST['name'];
  $password=$_POST['password'];
 $select="SELECT * FROM `admin` WHERE name='$name' AND password='$password' ";
  $sql=mysqli_query($conn,$select);
  $row=mysqli_fetch_assoc($sql);
  $num=mysqli_num_rows($sql);
  if($num > 0){
    $_SESSION["admin"]=$name; 
    $_SESSION["role"]=$row['role']; 
    header ('location:http:/unii/admin%20panal/index.php');

  }else{
    echo "<div class='alert text-center alert-danger ' style='width:50% ;text-align: center; margin: auto '>
    <h6 style='font-weight: 500'>  Your email or password false!</h6>
   </div>";
  }
}
?>



<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Login Page</h1>
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
                  <h2>Login in</h2>
                  
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
                    
                 
                    <div class="form-group">
                      <button name="login" class="btn btn-primary btn-lg">Login</button>
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