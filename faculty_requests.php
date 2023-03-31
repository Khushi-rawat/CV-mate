<?php 
include 'config.php';
session_start();
$user_check=$_SESSION['id'];
$ses_sql=mysqli_query($conn,"SELECT * FROM faculty where id='$user_check'");
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body class="m-5">
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Enrollment No.</th>
      <th scope="col">Name</th>
      <th scope="col">View Request</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    $query="SELECT * from student INNER JOIN activity ON student.enrollment=activity.enrollment where (activity.status='0' AND (activity.faculty='$user_check' OR activity.faculty='0'))";
    //$query="SELECT * from student INNER JOIN activity ON student.enrollment=activity.enrollment where activity.status='0'";
    $c=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($c)){
      if($row['improve']==0){
      echo"
    <tr>
      <td>".$row['enrollment']."</td>
      <td>".$row['name']."</td>
      <td><a href='faculty_viewrequest.php?id={$row['enrollment']}&name={$row['name']}&title={$row['title']}'>view</a></td>
    </tr>";
    }
  }
    ?>
  </tbody>
</table>
</body>
</html>