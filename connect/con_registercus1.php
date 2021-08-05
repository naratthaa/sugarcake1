<?php
	include('connectdb.php');
	
    $user_fname=$_POST['fname'];
    $user_lname=$_POST['lname'];
    $user_username=$_POST['username'];
    $user_pass=$_POST['password'];
    $user_email=$_POST['email'];
    $user_tel=$_POST['tel'];
    $user_birth=$_POST['BOD'];
    $user_gender=$_POST['gender']; 
    $user_address=$_POST['address']; 
    $user_status=1;
    $file = pathinfo(basename($_FILES['user_img']['name']), PATHINFO_EXTENSION);
    $pic="img/pp.png";
	if ($file != "") {
		$new_image_name = 'img' . uniqid() . "." . $file;
		//echo $new_image_name;
		$image_path = "../img";
		$upload_path = $image_path . "/" . $new_image_name;
		//echo $upload_path;
	
		//uploading
		$upload = move_uploaded_file($_FILES['user_img']['tmp_name'], $upload_path);
		if ($upload == FALSE) {
			echo "ไม่สามารถ UPLOAD รูปภาพได้";
			exit();
		}
		$pro_image = $new_image_name;
		$pic = "img/".$pro_image;
	} 		
   

    $sql = "INSERT INTO user(user_fname,user_lname,user_username,user_pass,user_email,user_birth,user_tel,user_gender,user_img,user_address,user_status) values ('$user_fname','$user_lname','$user_username','$user_pass','$user_email','$user_birth','$user_tel','$user_gender','$pic','$user_address',1)";
    $reult=mysqli_query($conn,$sql);
    if($reult){
        echo "<script>window.alert('Create Success')</script>";
        echo "<script>window.location='food.php.'</script>";
    }
    else{
        echo "<script>window.alert('Fail Please Try Agins')</script>";
    }
	
	// mysqli_query($conn,"INSERT INTO user ( user_fname, user_lname, user_username, user_pass, user_email, user_tel, user_birth, user_gender,user_address, user_status) values 
    // ('$user_fname', '$user_lname','$user_username', '$user_pass', '$user_email', '$user_tel', '$user_birth', '$user_gender', '$user_address', '$user_status')");
	header('location:../home.php');

?>