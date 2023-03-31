<?php session_start();
$user=$_SESSION['id'];
include "config.php";
if(isset($_POST['delete'])){
        $t=$_POST['title'];
        echo $t;
    $delete = "DELETE from activity WHERE (enrollment='$user' AND title='$t')";
  $rw=mysqli_query($conn,$delete);
  if($rw){
  //   echo '<div class="alert alert-danger" role="alert">
  //   Activity Deleted!
  // </div>';
    // header('refresh:3;url='.$_SERVER['PHP_SELF']);
    echo "<script>window.location.href = 'display_activity.php'</script>";
  }
  else{
    echo "error";
  }}

?>