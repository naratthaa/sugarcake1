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
    $user_status=2;

    mysqli_query($conn,"INSERT INTO user ( user_fname,user_lname,user_username,user_pass,user_email,user_birth,user_tel,user_gender,user_address,user_status) values ('$user_fname','$user_lname','$user_username','$user_pass','$user_email','$user_birth','$user_tel','$user_gender','$user_address',2)");

	
	// mysqli_query($conn,"INSERT INTO user ( user_fname, user_lname, user_username, user_pass, user_email, user_tel, user_birth, user_gender,user_address, user_status) values 
    // ('$user_fname', '$user_lname','$user_username', '$user_pass', '$user_email', '$user_tel', '$user_birth', '$user_gender', '$user_address', '$user_status')");
	header('location:../backed_staff.php');

?>