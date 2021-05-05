<?php
if(isset($_FILES['image'],$_POST['name'],$_POST['description'],$_POST['position'])  && !empty($_POST['name'])&& !empty($_POST['position']) && !empty($_POST['description'])){

	$name=$_POST['name'];
	$position=$_POST['position'];
	$description=$_POST['description'];

	$errors=array();
	$file_name=$_FILES['image']['name'];
	$file_size=$_FILES['image']['size'];
	$file_tmp=$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];



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
		$sql = " insert into team(`name`,`description`,`position`,`image`) VALUES 
		('$name','$description','$position','$file_name')";
		if($conn->query($sql)){
	  		echo "sucess";
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