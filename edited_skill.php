<?php
if(isset($_POST['editedskill_id'],$_POST['edited_skill'],$_POST['edited_value'])  && !empty($_POST['edited_skill'])&& !empty($_POST['edited_value'])&& !empty($_POST['editedskill_id'])){

	$edited_skill=$_POST['edited_skill'];
	$edited_value=$_POST['edited_value'];
	$editedskill_id=$_POST['editedskill_id'];
    require 'connect_database.php';
		$sql = " UPDATE skills SET `name` = '$edited_skill' ,`skill-value` = '$edited_value' where`id`='$editedskill_id'";
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

	