<?php include 'config.php';
session_start();
$user_check=$_SESSION['id'];
$ses_sql=mysqli_query($conn,"SELECT * FROM student where enrollment='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// $enrollment=$row['enrollment'];
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
    <title>Edit_profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div >
    <form method="post" >
      <div>
        <div class="panel-heading">
        <h4 class="panel-title">Personal Details</h4>
        </div>
          <div class="form-group mt-4">
            <label class="col-sm-2 control-label">Enrollment No.</label>
            <div class="col-sm-7">
              <input type="text" class="form-control"id="ContentPlaceHolder1_lblenroll" value="<?php echo $user_check; ?>" name="enrollment" disabled>
            </div>
          </div>
          <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="panel-body">
              <div class="form-group mt-3">
                <label class="col-sm-2 control-label">Department</label>
                <div class="col-sm-7">
                  <select class="form-control" name="department" ><?php $option=$row['branch'];?>
                    <option selected="">Select department</option>
                    <option value="IT"<?php if($option == "IT") echo 'selected = "selected"'; ?>>IT</option>
                    <option value="CE"<?php if($option == "CE") echo 'selected = "selected"'; ?>>CE</option>
                    <option value="EE"<?php if($option == "EE") echo 'selected = "selected"'; ?>>EE</option>
                    <option value="EC"<?php if($option == "EC") echo 'selected = "selected"'; ?>>EC</option>
                    <option  value="CHEMICAL"<?php if($option == "CHEMICAL") echo 'selected = "selected"'; ?>>Chemical</option>
                    <option value="IC" <?php if($option == "IC") echo 'selected = "selected"'; ?>>IC</option>
                    <option value="PE"<?php if($option == "PE") echo 'selected = "selected"'; ?>>PE</option>
                    <option value="MECHANICAL"<?php if($option == "MECHANICAL") echo 'selected = "selected"'; ?>>ME</option>
                  </select>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group mt-3">
                  <label class="col-sm-2 control-label">Course</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="course"><?php $option=$row['course']?>
                      <option selected="">Select Course</option>
                      <option value="BE"<?php if($option == "BE") echo 'selected = "selected"'; ?>>BE</option>
                      <option value="ME"<?php if($option == "ME") echo 'selected = "selected"'; ?>>ME</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group mt-3">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="gender"><?php $option=$row['gender'];?>
                      <option selected="">Select Gender</option>
                      <option value="female"<?php if($option == "female") echo 'selected = "selected"'; ?>>Female</option>
                      <option value="male"<?php if($option == "male") echo 'selected = "selected"'; ?>>Male</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group mt-3">
                  <label class="col-sm-2 control-label">Passout Year</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="passoutyear">
                    <?php $option=$row['passoutyear'];?>
                      <option selected="">Select passout year</option>
                      <option value="2024"<?php if($option == "2024") echo 'selected = "selected"'; ?>>2024</option>
                      <option value="2025"<?php if($option == "2025") echo 'selected = "selected"'; ?>>2025</option>
                      <option value="2026"<?php if($option == "2026") echo 'selected = "selected"'; ?>>2026</option>
                      <option value="2027"<?php if($option == "2027") echo 'selected = "selected"'; ?>>2027</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
              <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
              </div>
              <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Mobile No.</label>
            <div class="col-sm-7">
              <input type="tel" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
            </div>
              </div>
              <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
            </div>
            </div>
            
            <div class="form-group mt-3">
            <label class="col-sm-2 control-label">password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
            </div>
          </div>
          <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-7">
              <input type="text" rows="3" class="form-control" name="address" value="<?php echo $row['address']; ?>">
          </div>
        </div>
      </div>
<br><br>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Semester Details</h4>
        </div>
        <div class="panel-body">
          <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Current semester</label>
            <div class="col-sm-7">
              <input type="number" class="form-control" max="8" min="1" name="sem" value="<?php echo $row['sem']; ?>">
            </div>
          </div>
          
          <div class="form-group mt-3">
            <label class="col-sm-2 control-label">CGPA</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" max="10" min="0" name="cgpa" value="<?php echo $row['cgpa']; ?>">
            </div>
          </div>
          <div class="form-group mt-3">
            <label class="col-sm-2 control-label">Current Backlog</label>
            <div class="col-sm-7">
              <input type="number" class="form-control" max="10" min="0" name="backlog" value="<?php echo $row['backlog']; ?>">
            </div>
          </div>
        </div>
      </div><br><br>
          <div class="form-group mt-3">
            <div class="col-sm-7 col-sm-offset-2">
              <button style="margin-left: 25%;" type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button style="margin-left: 25%;" type="reset" class="btn btn-primary" name="cancel">Reset</button>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

<?php
include "config.php";

if(isset($_POST['submit']))
{
  $enrollment=$_SESSION['id'];
  $name=$_POST['name'];
  $department=$_POST['department'];
  $course=$_POST['course'];
  $gender=$_POST['gender'];
  $passout_year=$_POST['passoutyear'];
  $mobile=$_POST['mobile'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $sem=$_POST['sem'];
  $cgpa=$_POST['cgpa'];
  $backlog=$_POST['backlog'];

// $sql= "UPDATE student SET 'name'='$name', 'department'='$department', 'course'='$course', 'gender'='$gender',
// 'passoutyear'='$passout_year', 'mobile'='$mobile', 'dob'='$dob', 'address'='$address', 'sem'='$sem', 
// 'cgpa'='$cgpa', 'backlog'='$backlog' 
// WHERE enrollment=$enrollment";
$sql="UPDATE `student` SET `name`='$name',`branch` = '$department',`course`='$course',`gender`='$gender',`passoutyear`='$passout_year',`mobile`='$mobile',`dob`='$dob',`sem`='$sem',`address`='$address',`cgpa`='$cgpa',`backlog`='$backlog' WHERE `enrollment` = '$user_check'";
$q=mysqli_query($conn,$sql);
 if($q)
 {
  echo '<div class="alert alert-success" role="alert">
  Record has been updated!
</div>';
 }
}
// header('Location: cv.php');
?>

</body>
</html>