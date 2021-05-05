<?php
if(isset($_POST['deleted_branch_id'])) {

	$deleted_branch_id=$_POST['deleted_branch_id'];
	$sql="delete from companyinformation where id=$deleted_branch_id";
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