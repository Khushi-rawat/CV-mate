<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $enrollment=$password=$cpassword=$email="";
$count=0;
if(empty($_POST['id']) || !preg_match("/^[1-2][0-9]{11}$/",$_POST['id'])){
    echo "<script>
    window.alert('Enter valid enrollment number');
    </script>";
    $count++;
}
else{
    $enrollment = $_POST['id'];
}
if(empty($_POST['password'])){
    echo "<script>
    window.alert('Enter password');
    </script>";
    $count++;
}
else{
    $password = $_POST['password'];
}
if(empty($_POST['cpassword'])){
    echo "<script>
    window.alert('Enter confirm password');
    </script>";
    $count++;
}
else{
    $cpassword = $_POST['cpassword'];
}
if(empty($_POST['email']) || !preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['email'])){
    echo "<script>
    window.alert('Enter valid email');
    </script>";
    $count++;
}
else{
    $email = $_POST['email'];
}
if($password != $cpassword){
    echo "<script>
    window.alert('Enter same password and confirm password');
    </script>";
    $count++;
}
include 'config.php';
if($count==0 && $_POST['user']=='student'){
$query = "INSERT INTO `student` (enrollment,email,password) VALUES ('$enrollment','$email','$password')";
if(mysqli_query($conn,$query)){
    echo "<script>
    window.alert('Registration Successful!!!');
    </script>";
     header("location:login.php");
}
else{
    echo "<script>
    window.alert('Please try again...');
    </script>";
}}
else if($count==0 && $_POST['user']=='faculty'){
$query = "INSERT INTO `faculty` (id,email,password) VALUES ('$enrollment','$email','$password')";
if(mysqli_query($conn,$query)){
    echo "<script>
    window.alert('Registration Successful!!!');
    </script>";
     header("location:login.php");
}
else{
    echo "<script>
    window.alert('Please try again...');
    </script>";
    
}}
else{
    die("Enter your correct details");
}}
?>