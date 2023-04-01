<?php session_start();
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
    <title>nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        li a:hover {
            background: rgb(135, 130, 130);
        }

        li a {
            display: block;
            color: black;
            padding: 14px, 16px;
        }

        li a:hover:not(.active) {
            background: rgb(135, 130, 130);
        }

        a:active {
            background: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" target="main" aria-current="page" href="cv.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_activity.php" target="main">Add Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="main" href="display_activity.php">Display Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="main" href="assessment.php">Your Assessment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="main" href="edit_profile.php">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_parent" href="logout.php">Log Out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>

</html>