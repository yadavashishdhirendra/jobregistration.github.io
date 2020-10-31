<?php
$username="root";
$password="";
$server="localhost";
$database="filling";

$con=mysqli_connect($server,$username,$password,$database);
if($con){
    ?>
    <script>
    // alert("Connected");
    </script>
    <?php
}
else{
    ?>
    <script>
    // alert("Not Connected");
    </script>
    <?php
}
?>