<?php
if(isset($_POST['deleted_id'])) {

	$deleted_id=$_POST['deleted_id'];
	$sql="delete from `contact-us` where id=$deleted_id";
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