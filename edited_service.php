<?php
if(isset($_POST['edited_icon'],$_POST['edited_id'],$_POST['edited_title'],$_POST['edited_description'])  && !empty($_POST['edited_title'])&& !empty($_POST['edited_icon']) && !empty($_POST['edited_description'])&& !empty($_POST['edited_id'])){

	$edited_icon=$_POST['edited_icon'];
	$edited_title=$_POST['edited_title'];
	$edited_description=$_POST['edited_description'];
	$edited_id=$_POST['edited_id'];
    require 'connect_database.php';
		$sql = " UPDATE service SET `icon` = '$edited_icon',`title` = '$edited_title' ,`description` = '$edited_description' where`id`='$edited_id'";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "error";
	  	}
	 } 	
	
else{
	echo"ay 7aga";
}
	  
?>

	