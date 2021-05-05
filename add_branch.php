<?php
if(isset($_POST['name'],$_POST['address'],$_POST['description'],$_POST['facebooklink'],$_POST['twitterlink'] ,$_POST['googlepluslink'],$_POST['ripplelink'],$_POST['linkedinlink']) && !empty($_POST['name'])&& !empty($_POST['address'])&& !empty($_POST['description'])&& !empty($_POST['facebooklink'])&& !empty($_POST['twitterlink'])&& !empty($_POST['googlepluslink']) && !empty($_POST['ripplelink'])&& !empty($_POST['linkedinlink'])){

	$name=$_POST['name'];
	$address=$_POST['address'];
	$description=$_POST['description'];
    $facebooklink=$_POST['facebooklink'];
    $twitterlink=$_POST['twitterlink'];
	$googlepluslink=$_POST['googlepluslink'];
	$ripplelink=$_POST['ripplelink'];
	$linkedinlink=$_POST['linkedinlink'];
	  	require 'connect_database.php';
		$sql = " insert into companyinformation(`name`,`address`,`description`,`facebooklink`,`twitterlink`,
		`googlepluslink`,`ripplelink`,`linkedinlink`) VALUES 
		('$name','$address','$description','$facebooklink','$twitterlink','$googlepluslink','$ripplelink','$linkedinlink')";
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