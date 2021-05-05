<?php
if(isset($_FILES['image'],$_POST['title'],$_POST['description'],$_POST['icon'])  && !empty($_POST['title'])&& !empty($_POST['description'])&& !empty($_POST['icon'])){

	$title=$_POST['title'];
	$description=$_POST['description'];
    $icon=$_POST['icon'];
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
	  	move_uploaded_file($file_tmp,"../course_site/images/about-us/".$file_name);
	  	require 'connect_database.php';
		$sql = " insert into `with-us`(`title`,`description`,`image`,`icon`) VALUES 
		('$title','$description','$file_name','$icon')";
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