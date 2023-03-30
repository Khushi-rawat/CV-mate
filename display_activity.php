<?php
session_start();
if(isset($_GET['title'])){
  $t=$_GET['title'];
}
include 'config.php';
$user=$_SESSION['id'];
$ses_sql=mysqli_query($conn,"SELECT * FROM activity WHERE enrollment='$user'");
// $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// $enrollment=$row['enrollment'];

if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}      
?>
<!doctype html>

    <head>

        <title>Activity List</title>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    </head>

    <body class="m-5">
    
    <table class="table table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Main Activity</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Attachment</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
<form method="post">
  <tbody id="xyz">
    <?php
    while($row=mysqli_fetch_assoc($ses_sql)){
      $title=$row['title'];
      if($row['status']==0){
  $status="Not Approved";
}
else{
  $status="Approved";
}
    echo'
    <tr>
      <td>'.$row['activity'].'</td>
      <td>'.$title.'</td>
      <td>'.$row['description'].'</td>
      <td>'.$row['file'].'</td>
      <td>'.$status.'</td>
      <td><a class="btn btn-danger" href="display_activity.php?title='.$title.'">Delete</a></td></td>
    </tr>';
  $delete = "DELETE from activity WHERE (enrollment='$user' AND title='$t')";
$rw=mysqli_query($conn,$delete);
if($rw){
  echo "Sucessful";
  header('refresh:3;url='.$_SERVER['PHP_SELF']);
}
else{
  echo "error";
}}
  
    ?>
    </tbody>
</form>
</table>