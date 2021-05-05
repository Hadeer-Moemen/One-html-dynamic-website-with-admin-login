<?php
if(isset($_POST['slider_id'])) {

	$slider_id=$_POST['slider_id'];
	$sql="delete from slider where id=$slider_id";
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