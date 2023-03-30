<?php $id=$_GET['id'];
$q="SELECT * FROM activity,student WHERE  (enrollment='$id' AND status='0')";
$r=mysqli_query($conn,$q);
?>
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
  <form method="post">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title"><?php echo $id;?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $r['name'];?></h6>
  </div>
</div>
<br>
    <div class="card">
    <div class="card-body">
    <h5 class="card-title"><?php </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Title/Name</h6>
    <p class="card-text">DESCRIBTION: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Project Link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
  <img src="" class="card-img-bottom" alt="FILE ">
</div>
  <div class="d-grid gap-2 d-md-block m-3">
  <button class="btn btn-success me-md-5" type="submit" value="approve"name="approve">Approve</button>
  <button class="btn btn-danger" type="button" value="reject" name="reject">Reject</button>
</div></form>

<?php
include "config.php";
if(isset($_POST['approve']))
{
$update = "UPDATE activity SET status='1' WHERE enrollment='$id'";
$row=mysqli_query($conn,$update);
if($row){
  echo "Sucessful";
}
else{
  echo "error";
}
}
?>
</body>
</html>