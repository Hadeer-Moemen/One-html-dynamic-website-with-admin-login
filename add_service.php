<?php
if(isset($_POST['icon'],$_POST['title'],$_POST['description']) && !empty($_POST['icon']) && !empty($_POST['title']) && !empty($_POST['description'])){

	$icon=$_POST['icon'];
	$title=$_POST['title'];
    $description=$_POST['description'];
	
	  	require 'connect_database.php';
		$sql = " insert into service(`icon`,`title`,`description`) VALUES 
		('$icon','$title','$description')";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "invalid";
	  	}
	  	
	}
else{
	echo"ay 7aga";
}
	  
?>