<?php
include ("comp.php");
include ("head.php");
include ("conn.php");
include ("foot.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all gategories</title>
    <?php echo $footstyle; ?>
</head>
<body>
<div class="container">
<h2> <b> Search Result</b></h2>
<div class="row">
<?php 
$i = 0;
if ($_GET['se'] == Null) {
  echo "you havent input enything";
  }
else{
  
$se = $_GET['se'];
$sql = "Select * From art Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;
  }
$sql = "Select * From gifts Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  }
$sql = "Select * From paper Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  
  }
$sql = "Select * From engenering Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  }
$sql = "Select * From healthandpersonalcare Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  }

$sql = "Select * From officetool Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  }

$sql = "Select * From schoolproducts Where name  Like '%$se%' OR id Like '%$se%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  else {
    $i++;  }
  }  
  if ($i == 7) {
    echo "no result found check it later";

}
  ?>
</div></div>
<?php echo $foot; ?>
</body>
</html>
