<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .m-5{
            width: 50%;
           justify: center;

        }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body ><form method="post">
<section class="vh-100" style="background-color: #003975;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>
            <div class="mb-2">
    <select class="form-select" aria-label="Default select example" name="user">
  <option value="student" selected>Student</option>
  <option value="faculty">Faculty</option>
</select>
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Id" name="id">
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary m-5 mt-1" style="background: #003975;">Login</button>
  <div>
  <a href="register.php"><button type="button" class="btn btn-primary m-5 mt-1" style="background-color: #003975;">Register here</button></a>
   
  </div>
</form>
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id=$_POST['id'];
    $password=$_POST['password'];
include 'config.php';
if(!$conn){
    die("Connection failed");
}
else if($_POST['user']=='student'){
  $query = "SELECT * FROM student WHERE enrollment='$id' and password='$password'";
$sql=mysqli_query($conn,$query);
$count=mysqli_num_rows($sql);
if($count>0){
    // $_SESSION("enrollment");
    $_SESSION['id']=$id;
    $_SESSION['user']='student';
        header("location: student_profile.php");
}}
else if($_POST['user']=='faculty'){ 
  $query = "SELECT * FROM faculty WHERE id='$id' and password='$password'";
$sql=mysqli_query($conn,$query);
$count=mysqli_num_rows($sql);
if($count>0){
    $_SESSION['id']=$id;
    $_SESSION['user']='faculty';
    header("location: fac_profile.php");
}}
else{
    echo '<div class="alert alert-danger" role="alert">
  Enter same password and confirm password!
</div>';
}
}
?>
</body>
</html>