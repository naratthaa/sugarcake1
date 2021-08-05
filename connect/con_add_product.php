<?php
	include('connectdb.php');
	$pd_name=$_POST['pd_name'];
	$pd_price=$_POST['pd_price'];	
	$pd_des=$_POST['pd_des'];	
	$cat_id= $_POST['category'];
	$file = pathinfo(basename($_FILES['pic_index']['name']), PATHINFO_EXTENSION);
	$pic="img/1.png";
	if ($file != "") {
		$new_image_name = 'img' . uniqid() . "." . $file;
		//echo $new_image_name;
		$image_path = "../img";
		$upload_path = $image_path . "/" . $new_image_name;
		//echo $upload_path;
	
		//uploading
		$upload = move_uploaded_file($_FILES['pic_index']['tmp_name'], $upload_path);
		if ($upload == FALSE) {
			echo "ไม่สามารถ UPLOAD รูปภาพได้";
			exit();
		}
		$pro_image = $new_image_name;
		$pic = "img/".$pro_image;
	} 		
	mysqli_query($conn,"INSERT into product(pd_name,pd_price,pd_img,pd_des,cat_id) values ('$pd_name','$pd_price','$pic','$pd_des','$cat_id')");
    header('location:../backed_product.php');

    ?>