<?php
if(isset($_POST['deleted_id'])) {

	$deleted_id=$_POST['deleted_id'];
	
	  	require 'connect_database.php';
		$sql="delete from portofolio  where id=$deleted_id";
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