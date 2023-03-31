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
    <title>Document</title>
</head>

<frameset rows="9%,91%">
    <frame src="nav.php" name="menu">
        <frame src="cv.php" name="main">
</frameset>
<noframes>

    <body>Your browser dont support frame
</noframes>
</body>

</html>