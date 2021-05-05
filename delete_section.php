<?php
if(isset($_POST['deleted_section_id'])) {

	$deleted_section_id=$_POST['deleted_section_id'];
	$sql="delete from `with-us` where id=$deleted_section_id";
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