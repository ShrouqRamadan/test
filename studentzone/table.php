<?php ob_start();?>
<?php include '../sharded/header.php';?>
<?php include '../sharded/navs.php';?>
<?php
if($_SESSION['student']){

}else{
  header('location:/unii/studentzone/login.php');
}
?> 
<?php
// $select="SELECT registcourse.id,name FROM registcourse JOIN student ON registcourse.studentid=student.id;";
$select="SELECT * FROM  registcourse";
$sql=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($sql);

#=================

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
if(isset($_GET['table'])){
  $update=true;
  $id=$_GET['table'];
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
  
}


?>
<?php ob_end_flush();?>
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1 class="mb0"> <span>Table for year 2021/2022</h1>
              
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
                  <h2>Table </h2>
                  
                  <table class="table">
  <thead class="" style="background-color: rgb(106, 65,237)"> 
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student</th>
      <th scope="col">Level</th>
      <th scope="col">1st course</th>
      <th scope="col">2nd course</th>
      <th scope="col">3rd course</th>
      <th scope="col">4th course</th>
      <th scope="col">5th course</th>
      <th scope="col">6th course</th>
      <th scope="col">7th course</th>

     
     

    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['studentid']?></td>
      <td><?php echo $row['levelid']?></td>
      <td><?php echo $row['courseid1']?></td>
      <td><?php echo $row['courseid2']?></td>
      <td><?php echo $row['courseid3']?></td>
      <td><?php echo $row['courseid4']?></td>
      <td><?php echo $row['courseid5']?></td>
      <td><?php echo $row['courseid6']?></td>
       <td><?php echo $row['courseid7']?></td>

      
    </tr>
   
    
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