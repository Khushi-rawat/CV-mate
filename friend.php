<?php include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="m-5">
<table class="table table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      
      <th scope="col">View Profile</th>
    </tr>
  </thead>
  
  <tbody id="xyz">
  <?php

include "config.php";
$user=$_SESSION['id'];
$query="SELECT * from `student` WHERE enrollment<>$user";
$connect=mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($connect))
{
    echo"
    <tr>
    <td>".$row['enrollment']."</td>
    
    <td><a href='cv2.php?id={$row['enrollment']}' style='text-decoration: none; color: black'><button type='submit' name='view' class='btn btn-primary'>View</button></a></td>
    
    </tr>";
}
?>
    </tbody>
    
</table>
