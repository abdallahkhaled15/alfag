<?php
include ("comp.php");
include ("head.php");
include ("conn.php");
include ("foot.php");?>
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
<h2> <b> New Arrival </b></h2>
<div class="row">
<?php 
$sql = "Select * From allgategories where dis='newarrival'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
   coot($im,$nam,$pric,$id);
  }}
  ?>
</div></div>
<?php echo $foot; ?>
</body>
</html>
