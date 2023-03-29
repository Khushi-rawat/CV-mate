<?php
$server="localhost";
$name="root";
$db="cv";
$password="";
$conn=mysqli_connect($server,$name,$password,$db);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>