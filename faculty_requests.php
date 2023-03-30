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
    <?php include 'config.php'; 
    $query="SELECT * from activity,student where status='false'";
    $c=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($c)){
      echo"
    <tr>
      <td>".$row['enrollment']."</td>
      <td>".$row['name']."</td>
      <td><a href='faculty_viewrequest.php?id={$row['enrollment']}'>view</a></td>
    </tr>";}?>
  </tbody>
</table>
</body>
</html>