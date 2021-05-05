<?php
if(isset($_POST['skill_id'])) {

	$skill_id=$_POST['skill_id'];
	$sql="delete from skills where id=$skill_id";
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