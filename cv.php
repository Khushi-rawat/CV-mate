<?php include 'config.php';
session_start();
$user_check=$_SESSION['id'];
$ses_sql=mysqli_query($conn,"SELECT * FROM student where enrollment='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$enrollment=$row['enrollment'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CV</title>

</head>
<body>

<section class="vh-120" style="background-color: #003975;">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-10">
<h5 class="mb-3" style="color: white;">Student Details</h5>

        <div class="card mb-3">
          <div class="card-body">
          
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['name']; ?></p>
              </div>
              <div class="col-sm-2">
                <p class="mb-0">Enrollment</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $enrollment; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
              </div>
              <div class="col-sm-2">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['mobile']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Branch</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['branch']; ?></p>
              </div>
              <div class="col-sm-2">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['gender']; ?></p>
              </div>
            </div>
            
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Passout Year</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['passout year']; ?></p>
              </div>
              <div class="col-sm-2">
                <p class="mb-0">Current CGPA</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0"><?php echo $row['cgpa']; ?></p>
              </div>
</div>
          </div>
</div>
</div>
        
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

      <h5 class="mb-3" style="color: white;">Your Activities</h5>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            
  <ul class="list-group mb-0">
          <?php
          
$query=mysqli_query($conn,"SELECT * FROM activity where enrollment='$enrollment' ORDER BY activity");
while($r=mysqli_fetch_assoc($query)){
  echo'
            <h5>'.$r["activity"].'</h5>
            <h6>'.$r["title"].'</h6>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                <div class="d-flex align-items-center">'
                  .$r["description"].'
                </div>
              </li>';
}?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

</body>
</html>