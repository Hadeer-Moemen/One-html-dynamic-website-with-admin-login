<?php
if(isset($_POST['name'],$_POST['email'],$_POST['msg'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];

	
	  	require '../site_admin/connect_database.php';
		$sql = "insert into`contact-us`(`name`,`email`,`msg`) VALUES 
		('$name','$email','$msg')";
		if($conn->query($sql)){
	  		echo "success";
	  	}
	  	else
	  	{
	  		echo "invalid";
	  	}
	  	
	}
	  
?>