<?php include 'config.php';
session_start();
if($_SESSION['user']=='student'){
  $user_check=$_SESSION['id'];
  $friend=$_GET['id'];
  $ses_sql=mysqli_query($conn,"SELECT * FROM student where enrollment='$friend'");
  $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
  $enrollment=$row['enrollment'];}
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}
echo"<form action='' method='post'>
<button type='submit' name='submit' class='btn btn-primary'>Request</button>";
    if(isset($_POST['submit']))
{  $update = "UPDATE student SET `friend`='1' WHERE enrollment='$id'";
    
   }
?>