
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .m-5{
            width: 50%;
           justify: center;

        }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="m-5">
    <form method="post">
  <div class="m-5">
    <select class="form-select" aria-label="Default select example" name="user">
  <option value="student">Student</option>
  <option value="faculty">Faculty</option>
</select>
  </div>
  <div class="m-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="m-5">
    <label for="exampleInputId1" class="form-label">ID</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">
  </div>
  <div class="m-5">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="m-5">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary m-5 mt-1" name="submit">Submit</button>
</form>
<?php include 'validate.php';?>
</body>
</html>