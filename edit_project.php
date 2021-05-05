<?php
if(isset($_FILES['edit_image'],$_POST['edit_id'],$_POST['edit_category_id'],$_POST['edit_title'],$_POST['edit_description'])  && !empty($_POST['edit_title']) && !empty($_POST['edit_category_id'])&& !empty($_POST['edit_description'])&& !empty($_POST['edit_id'])){

	$edit_title=$_POST['edit_title'];
	$edit_description=$_POST['edit_description'];
	$edit_id=$_POST['edit_id'];
	$edit_category_id=$_POST['edit_category_id'];
    require 'connect_database.php';
		$sql = " UPDATE portofolio SET `title` = '$edit_title' ,`description` = '$edit_description' ,`categ_id`='$edit_category_id' where`id`='$edit_id'";
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
	  	move_uploaded_file($file_tmp,"../course_site/images/portfolio/".$file_name);
	  	require 'connect_database.php';
		$sql = " UPDATE portofolio SET `title` = '$edit_title' ,`description` = '$edit_description', `image`='$file_name', `categ_id`='$edit_category_id' where`id`='$edit_id'";
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

	