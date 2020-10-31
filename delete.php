<?php
include 'connection.php';
// include 'index1.php';
// include 'index.php';
$id=$_GET['id'];
$sql = " DELETE FROM job WHERE id=$id ";
$res=mysqli_query($con,$sql);
if($res){
    ?>
    <!-- <script>
      alert('Data Successfully Deleted');
    </script> -->
    echo "Deleted";
    <?php
}
else{
      ?>
      <!-- <script>
        alert('Data Not Deleted');
      </script> -->
      echo "Not Deleted";
      <?php
}
header('location:index1.php');
?>
        
