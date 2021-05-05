<?php
if(isset($_FILES['image'],$_POST['title'],$_POST['description'],$_POST['category_id'])  && !empty($_POST['title'])&& !empty($_POST['category_id']) && !empty($_POST['description'])){

	$title=$_POST['title'];
	$description=$_POST['description'];
$categ_id=$_POST['category_id'];
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
	  	move_uploaded_file($file_tmp,"../course_site/images/portfolio/".$file_name);
	  	require 'connect_database.php';
		$sql = " insert into portofolio(`title`,`description`,`image`,`categ_id`) VALUES 
		('$title','$description','$file_name',$categ_id)";
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