<?php ob_start();?>
<?php include '../sharded/header.php';?>

<?php include '../sharded/nav.php';?>

<?php
#============
if($_SESSION['admin']){

}else{
  header('location:/unii/admin/login.php');
}

?> 
<?php ob_end_flush();?>     
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Search Of Student</h1>
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
                <div class="col-lg-9 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                 <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="example" method="POST">
  <input type="text" placeholder="Search for student by id.." name="search">
  

  <button type="submit" ><i class="fa fa-search"></i></button>
</form>
                  <div class="container">
  
</div>

<?php

if(isset($_POST['search'])){
$word=$_POST['search'];
$select="SELECT * FROM student WHERE id LIKE '%$word%'";
$sql=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($sql)){
 echo '<br/> id : '. $row['id'];
 echo '<br/> Name : ' .$row['name'];
 echo '<br/> Level : ' .$row['levelid'];
 echo '<br/> Phone Number: ' .$row['phone'];
 echo '<br/> Email : ' .$row['email'];
 echo '<br/> Password: ' .$row['password'];
}}?>
    <!-- END wrapper -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

  </body>
</html>