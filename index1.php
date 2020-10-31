<!doctype html>
<html lang="en">
  <head>
  <?php include 'connection.php'; ?>
  <?php include 'links.php'; ?>
    <title>Display Data</title>
  </head>
  <body>
    <div class="container-fluid">
    <h2 class="text-center">List of Candidates For Job!</h2>
    <div class="box">
    <div class="table-responsive">
    <table>
    <thead>
    <tr>
    <th class="head">ID</th>
    <th class="head">Name</th>
    <th class="head">Email</th>
    <th class="head">Degree</th>
    <th class="head">Mobile</th>
    <th class="head">Refer</th>
    <th class="head">Job Post</th>
    <th class="head" colspan="2">Operation</th>
    </tr>
    </thead>
    <tbody>
    <?php
include 'connection.php';
$selectquery= "select *from job";
$query=mysqli_query($con,$selectquery);
// $num=mysqli_num_rows($query);
// echo $num;

// echo $res[6];
while($res=mysqli_fetch_array($query)){
    ?>
     <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['degree']; ?></td>
    <td><?php echo $res['mobile']; ?></td>
    <td><?php echo $res['refer']; ?></td>
    <td><?php echo $res['jobpost']; ?></td>
    <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
<?php
}
?>


    </tbody>
    </table>
    </div>
    </div>


   
  </body>
</html>