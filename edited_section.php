<?php
if(isset($_FILES['edited_section_image'],$_POST['edited_section_id'],$_POST['edited_section_title'],$_POST['edited_section_description'],$_POST['edited_section_icon'])  && !empty($_POST['edited_section_title'])&& !empty($_POST['edited_section_description'])&& !empty($_POST['edited_section_id'])&& !empty($_POST['edited_section_icon'])){

	$edited_section_title=$_POST['edited_section_title'];
	$edited_section_description=$_POST['edited_section_description'];
	$edited_section_id=$_POST['edited_section_id'];
	$edited_section_icon=$_POST['edited_section_icon'];
    require 'connect_database.php';
		$sql = " UPDATE `with-us` SET `title` = '$edited_section_title' ,`description` = '$edited_section_description',`icon` = '$edited_section_icon' where`id`='$edited_section_id'";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "error";
	  	}
	  	
	$errors=array();
	$file_name=$_FILES['edited_section_image']['name'];
	$file_tmp=$_FILES['edited_section_image']['tmp_name'];
	$file_type=$_FILES['edited_section_image']['type'];
    $file_size=$_FILES['edited_section_image']['size'];


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
	  	move_uploaded_file($file_tmp,"../course_site/images/about-us/".$file_name);
	  	require 'connect_database.php';
		$sql = " UPDATE `with-us` SET `title` = '$edited_section_title' ,`description` = '$edited_section_description', `icon` = '$edited_section_icon',`image`='$file_name' where`id`='$edited_section_id'";
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

	