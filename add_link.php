<?php
if(isset($_POST['link'], $_POST['team_id'], $_POST['social_id']) && !empty($_POST['link']) && !empty($_POST['team_id']) && !empty($_POST['social_id'])){

	
	$link=$_POST['link'];
	$social_id=$_POST['social_id'];
    $team_id =$_POST['team_id'];
	
	  	require 'connect_database.php';
	  	
		$sql = "insert into `team-social`(`social-id`,`link`,`team-id`) VALUES 
		('$social_id','$link','$team_id')";
		
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