<?php
if(isset($_POST['deleted_service_id'])) {

	$deleted_service_id=$_POST['deleted_service_id'];
	$sql="delete from service where id=$deleted_service_id";
	  	require 'connect_database.php';
		if($conn->query($sql)){
	  		echo "sucess";
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