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
        <h2 class="Font">Apply For Job!!</h2>  
      </div>
    <div class="card" style="width: 40rem;">
      <img src="hq-web-development-png-transparent-web-developmentpng-images-web-developer-png-600_450.png" 
      class="card-img-top" width="500" height="500" alt="">
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
  <?php include 'connection.php';
  $ids=$_GET['id'];
  $showquery="select * from job where id=$ids";
  $showdata=mysqli_query($con,$showquery);
  $arrdata=mysqli_fetch_array($showdata);
 if(isset($_POST['submit'])){
   $idupdate=$_GET['id'];
   $name=$_POST['name'];
    $email=$_POST['email'];
     $degree=$_POST['degree'];
      $mobile=$_POST['mobile'];
       $refer=$_POST['refer'];
         $jobpost=$_POST['jobpost'];

          $query="UPDATE job SET id=$ids , name='$name', email='$email', degree='$degree', mobile='$mobile', refer='$refer', jobpost='jobpost'
          where id=$idupdate";
          $res=mysqli_query($con,$query);
       if($res){
        ?>
        <script>
            alert("Data Successfully Updated!");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data Not Successfully Updated!");
        </script>
        <?php
    }
        }

?>
    <label for="Name">Name:-</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php echo $arrdata['name']; ?>" >
  </div>
  <div class="form-group">
    <label for="Email">Email:-</label>
    <input type="text" class="form-control" name="email" placeholder="for e.g. john@domain-name" value="<?php echo $arrdata['email']; ?>">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
   <div class="form-group">
    <label for="Degree">Degree:-</label>
    <input type="text" class="form-control" name="degree" placeholder="Highest Qualification for e.g.Bca,Mca" value="<?php echo $arrdata['degree']; ?>"> 
  </div>
  <div class="form-group">
    <label for="Mobile">Mobile:-</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter 10 Digit Mobile Number" value="<?php echo $arrdata['mobile']; ?>">
  </div>
   <div class="form-group">
    <label for="Refer">Refer:-</label>
    <input type="text" class="form-control" name="refer" placeholder="Any Reference" value="<?php echo $arrdata['refer']; ?>">
  </div>
   <div class="form-group">
    <label for="JobPost">Job Post:-</label>
    <input type="text" class="form-control" name="jobpost" placeholder="software engineer,Web Developer,etc." value="<?php echo $arrdata['jobpost']; ?>">
  </div>
  <button type="submit" id="btn" class="btn btn-primary btn-lg bnt" name="submit">Update</button>
</form>
  </div>
</div>
  </body>
</html>
