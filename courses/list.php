<?php ob_start();?>
<?php include '../sharded/header.php';?>
<?php include '../sharded/nav.php';?>
<?php
if($_SESSION['admin']){

}else{
 header('location:/unii/admin/login.php');
}
?>
<?php



$select="SELECT courses.id,courses.cour,courses.abbreviation,location.room,days.day,time.time FROM courses 
JOIN location ON courses.locationid=location.id 
JOIN days ON courses.dayid =days.id
JOIN time ON courses.timeid1=time.id;";
$sql=mysqli_query($conn,$select);
#============
if(isset($_GET['delete'])){
  $id= $_GET['delete'];
  $delete="DELETE FROM courses WHERE id=$id";
  mysqli_query($conn,$delete);
  header('location:/unii/courses/List.php');
}
 #=================

?>  
<?php ob_end_flush();?>    
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">List Of Courses</h1>
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
                  <h2>List Of Courses </h2>
                  
                  <table class="table">
  <thead class="" style="background-color: rgb(106, 65,237)"> 
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Courses name</th>
      <th scope="col">Course abbreviation</th>
      <th scope="col">Location</th>
      <th scope="col">Day</th>
      <th scope="col">start at</th>
     

      
      <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) : ?>

     <th scope="col" colspan="2" >Actions</th>
     <?php endif ;?>

    </tr>
  </thead>
  <tbody>
    <?php foreach($sql as $data) { ?>
    <tr>
      <th scope="row"><?php echo $data['id']?></th>
      <td><?php echo $data['cour']?></td>
      <td><?php echo $data['abbreviation']?></td>
      <td><?php echo $data['room']?></td>
      <td><?php echo $data['day']?></td>
      <td><?php echo $data['time']?></td>
      

     

      <?php  if(($_SESSION['role']==0)|| ($_SESSION['role']==1)) : ?>

    
     <td><a class="btn btn-danger"  href="list.php?delete=<?php echo $data['id']?>">Delete</a></td>

     <td><a class="btn btn-info"  href="add.php?edit=<?php echo $data['id']?>">Edit</a></td>

     <?php endif ;?>
      
    </tr>
   
    <?php } ?>
  </tbody>
</table>

              
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
     

    </div>
    <!-- END wrapper -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

    
  </body>
</html>