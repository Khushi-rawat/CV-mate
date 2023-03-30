<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $enrollment=$password=$cpassword=$email="";
$count=0;
if(empty($_POST['id']) || !preg_match("/^[1-2][0-9]{11}$/",$_POST['id'])){
    echo '<div class="alert alert-danger" role="alert">
 Enter valid enrollment number
</div>';
    $count++;
}
else{
    $enrollment = $_POST['id'];
}
if(empty($_POST['password'])){
     echo '<div class="alert alert-danger" role="alert">
 Enter password
</div>';
    $count++;
}
else{
    $password = $_POST['password'];
}
if(empty($_POST['cpassword'])){
    echo '<div class="alert alert-danger" role="alert">
 Enter  confirm password
</div>';
    $count++;
}
else{
    $cpassword = $_POST['cpassword'];
}
if(empty($_POST['email']) || !preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['email'])){
    echo '<div class="alert alert-danger" role="alert">
 Enter valid email
</div>';
    $count++;
}
else{
    $email = $_POST['email'];
}
if($password != $cpassword){
   echo '<div class="alert alert-danger" role="alert">
 Enter same password and confirm password
</div>';
    $count++;
}
include 'config.php';
if($count==0 && $_POST['user']=='student'){
$query = "INSERT INTO `student` (enrollment,email,password) VALUES ('$enrollment','$email','$password')";
if(mysqli_query($conn,$query)){
   echo '<div class="alert alert-success" role="alert">
 Registration Successful!!!
</div>';
     header("location:login.php");
}
else{
    echo '<div class="alert alert-danger" role="alert">
 Try Again
</div>';
}}
else if($count==0 && $_POST['user']=='faculty'){
$query = "INSERT INTO `faculty` (id,email,password) VALUES ('$enrollment','$email','$password')";
if(mysqli_query($conn,$query)){
     echo '<div class="alert alert-success" role="alert">
 Registration successful
</div>';
     header("location:login.php");
}
else{
    echo '<div class="alert alert-danger" role="alert">
 Try Again
</div>';
    
}}
}
?>