<?php
if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
		require 'connect_database.php';
		$password=$_POST['password'];
		$username=$_POST['username'];
		$_sql="select * from admin where username='$username' and password='$password'";
		$result=$conn->query($_sql);

		if($result->num_rows>0){
			session_start();
			$_SESSION['name']=$username;
			echo "success";
		}
			else {
				echo "invalid";
			}
	}
	else
	{
		echo "invalid";
	}
?>