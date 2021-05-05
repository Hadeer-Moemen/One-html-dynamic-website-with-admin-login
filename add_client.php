<?php
if(isset($_FILES['image'],$_POST['name'],$_POST['description'],$_POST['url'])  && !empty($_POST['name'])&& !empty($_POST['description'])&& !empty($_POST['url'])){

	$name=$_POST['name'];
	$description=$_POST['description'];
	$url=$_POST['url'];

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
	  	move_uploaded_file($file_tmp,"../course_site/images/clients/".$file_name);
	  	require 'connect_database.php';
		$sql = " insert into client(`name`,`description`,`image`,`url`) VALUES 
		('$name','$description','$file_name','$url')";
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