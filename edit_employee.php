<?php
if(isset($_FILES['edit_image'],$_POST['edit_id'],$_POST['edit_name'],$_POST['edit_position'],$_POST['edit_description'])  && !empty($_POST['edit_name']) && !empty($_POST['edit_position'])&& !empty($_POST['edit_description'])&& !empty($_POST['edit_id'])){

	$edit_name=$_POST['edit_name'];
	$edit_position=$_POST['edit_position'];
	$edit_description=$_POST['edit_description'];
	$edit_id=$_POST['edit_id'];
    require 'connect_database.php';
		$sql = " UPDATE team SET `name` = '$edit_name' ,`description` = '$edit_description' ,`position` = '$edit_position'where`id`='$edit_id'";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "error";
	  	}
	  	
	$errors=array();
	$file_name=$_FILES['edit_image']['name'];
	$file_tmp=$_FILES['edit_image']['tmp_name'];
	$file_type=$_FILES['edit_image']['type'];
    $file_size=$_FILES['edit_image']['size'];


	$x=explode('.',$file_name);
	$file_ext=strtolower(end($x));
	// eccho $file_ext; exit();
	$expensions=array("jpeg","jpg","png");
	  if(in_array($file_ext,$expensions)===false){
	  $errors[]="extension not allowed, please choose a jpeg or png file.";
	  }
	  if($file_size > 2097152)
	  {
	  $errors[]='File size must be excactely 2 Mb';
	  }
	  if(empty($errors)==true){
	  	move_uploaded_file($file_tmp,"../course_site/images/our-team/".$file_name);
	  	require 'connect_database.php';
		$sql = " UPDATE team SET `name` = '$edit_name' ,`description` = '$edit_description',`position` = '$edit_position', `image`='$file_name' where`id`='$edit_id'";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "error";
	  	}
	  	
	}

}
else{
	echo"ay 7aga";
}
	  
?>

	