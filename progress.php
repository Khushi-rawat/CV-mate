<?php
session_start();
$user=$_SESSION['id'];
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}   
include "config.php";
$test=array();
$count=0;
// $res=mysqli_query($conn,"SELECT title,assessment from activity WHERE (`enrollment`='$user' AND `status`='1')");
// while($row=mysqli_fetch_array($res)){
//     $test[$count]["label"]=$row["title"];
//     $test[$count]["y"]=$row["assessment"];
//     $count=$count+1;
// }

$res=mysqli_query($conn,"SELECT activity,SUM(assessment) as assessment from activity WHERE (`enrollment`='$user' AND `status`='1') GROUP BY activity");
while($row=mysqli_fetch_array($res)){
    $test[$count]["label"]=$row["activity"];
    $test[$count]["y"]=$row["assessment"];
    $count=$count+1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "YOUR PROGRESS"
	},
	axisY: {
		title: "Assessment"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 400px; width: 93%; margin:2%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>           