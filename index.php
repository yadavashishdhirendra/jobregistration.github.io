<!doctype html>
<html lang="en">
  <head>
    <?php include 'links.php'; ?>
    <title>Job Registration</title>
  </head>
  <body>
  <div class="container-fluid d-inline-flex">
  <div class="container" id="style">
      <div class=" ml-1" style="width: 300px;">
       <!-- <div class="container-fluid">  -->
       <h2 class="Font">Apply For Job!!</h2>  
      </div>
    <div class="card" style="width: 40rem;">
      <img src="hq-web-development-png-transparent-web-developmentpng-images-web-developer-png-600_450.png" 
      class="card-img-top img1" width="500" height="500" alt="">
    <div class="card-body">
      <a href="index1.php" target="blank"><button class="btn btn-outline-danger btn-lg butn">Check Form</button></a>
    </div>
  </div>
  </div>
</div>
<div class="card2">
  <div class="card-body">
    <form class="" method="POST">
  <div class="form-group">
    <label for="Name">Name:-</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" >
  </div>
  <div class="form-group">
    <label for="Email">Email:-</label>
    <input type="text" class="form-control" name="email" placeholder="for e.g. john@domain-name">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
   <div class="form-group">
    <label for="Degree">Degree:-</label>
    <input type="text" class="form-control" name="degree" placeholder="Highest Qualification for e.g.Bca,Mca" >
  </div>
  <div class="form-group">
    <label for="Mobile">Mobile:-</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter 10 Digit Mobile Number">
  </div>
   <div class="form-group">
    <label for="Refer">Refer:-</label>
    <input type="text" class="form-control" name="refer" placeholder="Any Reference">
  </div>
   <div class="form-group">
    <label for="JobPost">Job Post:-</label>
    <input type="text" class="form-control" name="jobpost" placeholder="software engineer,Web Developer,etc.">
  </div>
  <button type="submit" id="btn" class="btn btn-primary btn-lg bnt" name="submit">Submit</button>
</form>
  </div>
</div>
  </body>
</html>

<?php include 'connection.php';
 if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $email=$_POST['email'];
     $degree=$_POST['degree'];
      $mobile=$_POST['mobile'];
       $refer=$_POST['refer'];
         $jobpost=$_POST['jobpost'];

          $res=mysqli_query($con,"INSERT into job values('','$name','$email','$degree','$mobile','$refer','$jobpost')");
       if($res){
        ?>
        <script>
            alert("Data Successfully Submitted!");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data Not Successfully Submitted!");
        </script>
        <?php
    }
        }

?>