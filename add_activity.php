<?php include 'config.php';
session_start();
$user_check=$_SESSION['id'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <form action="" method="post">
<div class="row g-2 m-5">
    <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" name="activity">
        
      <option value=""></option>
        <option value="Course">Course</option>
        <option value="Project">Project</option>
        <option value="Internship">Internship</option>
        <option value="Achievement">Achievement</option>
        <option value="Extra Curricular">Extra Curricular</option>
        <option value="Research">Research</option>
        <option value="Skills">Skills</option>
        <option value="Others">Others</option>
      </select>
      <label for="floatingSelectGrid">Works with selects</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name" value="" name="title">
      <label for="floatingInputGrid">Title</label>
    </div>
  </div>
</div>
<div class="form-floating m-5">
  <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>
</div>
</div>

<div class="form-floating m-5">
    <input type="file" id="inputfile" name="file"/>
</div>
  </div>

<div class="row g-3 m-5">
    <div class="col-md">
</div><div class="col-md m-5">
</div>
    <div class="col-md">
<button type="submit" class="btn btn-primary " name="submit">Submit</button>
</div><div class="col-md">
</div>
    <div class="col-md">
</div>
</form>

<?php
include "config.php";

if(isset($_POST['submit']))
{
  $activity=$_POST['activity'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $file=$_POST['file'];

$query= "INSERT INTO activity (enrollment,activity, title, description, file) VALUES ('$user_check','$activity', '$title', '$description', '$file')";
$q=mysqli_query($conn,$query);
 if($q)
 {
  echo "Record inserted successfully.";
 }
}
?>
</body>
</html>