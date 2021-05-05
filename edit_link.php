<?php
if(isset($_POST['edit_link'],$_POST['team_id'],$_POST['social_id']) && !empty($_POST['edit_link']) && !empty($_POST['team_id']) && !empty($_POST['social_id'])) {

	$edit_link=$_POST['edit_link'];
	$social_id=$_POST['social_id'];
	$team_id=$_POST['team_id'];
	require 'connect_database.php';
		$sql="
		
		UPDATE `team-social` SET `link`='$edit_link' where `team-social`.`team-id`=$team_id AND `team-social`.`social-id`=$social_id";

	  	
		
		if($conn->query($sql)){
	  		echo "success";
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