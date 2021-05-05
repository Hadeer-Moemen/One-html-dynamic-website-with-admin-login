<?php
if(isset($_FILES['edited_img'],$_POST['edited_id'],$_POST['edited_title'],$_POST['edited_description'])  && !empty($_POST['edited_title'])&& !empty($_POST['edited_description'])&& !empty($_POST['edited_id'])){

	$edited_title=$_POST['edited_title'];
	$edited_description=$_POST['edited_description'];
	$edited_id=$_POST['edited_id'];
    require 'connect_database.php';
		$sql = " UPDATE slider SET `title` = '$edited_title' ,`description` = '$edited_description' where`id`='$edited_id'";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "error";
	  	}
	  	
	$errors=array();
	$file_name=$_FILES['edited_img']['name'];
	$file_tmp=$_FILES['edited_img']['tmp_name'];
	$file_type=$_FILES['edited_img']['type'];
    $file_size=$_FILES['edited_img']['size'];


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
	  	move_uploaded_file($file_tmp,"../course_site/images/slider/".$file_name);
	  	require 'connect_database.php';
		$sql = " UPDATE slider SET `title` = '$edited_title' ,`description` = '$edited_description', `image`='$file_name' where`id`='$edited_id'";
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

	