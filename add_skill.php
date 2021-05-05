<?php
if(isset($_POST['skill'],$_POST['value'])  && !empty($_POST['skill'])&& !empty($_POST['value'])){

	$skill=$_POST['skill'];
	$value=$_POST['value'];

	
	  	require 'connect_database.php';
		$sql = " insert into skills(`name`,`skill-value`) VALUES 
		('$skill','$value')";
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