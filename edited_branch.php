<?php
if(isset($_POST['edited_id'],$_POST['edited_name'],$_POST['edited_address'],$_POST['edited_description'],$_POST['edited_facebooklink'],$_POST['edited_twitterlink'],$_POST['edited_googlepluslink'],$_POST['edited_ripplelink']
	,$_POST['edited_linkedinlink'])&& !empty($_POST['edited_id'])&& !empty($_POST['edited_name'])&& !empty($_POST['edited_address'])&& !empty($_POST['edited_description'])&& !empty($_POST['edited_facebooklink'])&& !empty($_POST['edited_twitterlink'])&& !empty($_POST['edited_googlepluslink']) && !empty($_POST['edited_ripplelink'])&& !empty($_POST['edited_linkedinlink'])){

	$edited_id=$_POST['edited_id'];
	$edited_name=$_POST['edited_name'];
	$edited_address=$_POST['edited_address'];
	$edited_description=$_POST['edited_description'];
	$edited_facebooklink=$_POST['edited_facebooklink'];
	$edited_googlepluslink=$_POST['edited_googlepluslink'];
    $edited_ripplelink=$_POST['edited_ripplelink'];
    $edited_twitterlink=$_POST['edited_twitterlink'];
    $edited_linkedinlink=$_POST['edited_linkedinlink'];

    require 'connect_database.php';
		$sql = " UPDATE companyinformation SET `name` = '$edited_name',`description` = '$edited_description' ,`address` = '$edited_address' ,`facebooklink` = '$edited_facebooklink' ,`googlepluslink` = '$edited_googlepluslink',`ripplelink` = '$edited_ripplelink',`twitterlink` = '$edited_twitterlink',`linkedinlink` = '$edited_linkedinlink' where`id`='$edited_id'";
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
