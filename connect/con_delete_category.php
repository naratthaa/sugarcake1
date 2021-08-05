<?php 
include('connectdb.php');
$cat_id=$_GET['cat_id'];
mysqli_query($conn, "DELETE FROM category WHERE cat_id='$cat_id'");
header('location:../backed_category.php')
?>

