<?php 
include('connectdb.php');
$pd_id=$_GET['pd_id'];
mysqli_query($conn, "DELETE FROM product WHERE pd_id='$pd_id'");
header('location:../backed_product.php')
?>

