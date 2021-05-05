<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>


	<?php require "header.php" ;?>

<!-- start table slider -->
<?php
		require 'connect_database.php';
		$id =$_GET['team_id'];
		$_sql="select `team-social`.* , team.name as team_name , `social-media`.name as social_name from `team-social` inner join team on team.id = `team-social`.`team-id` inner join `social-media` on `team-social`.`social-id`=`social-media`.id where `team-social`.`team-id`=$id
 ";
		$team_social=$conn->query($_sql);
		?>
 	<?php
		require 'connect_database.php';
		$_sql="select * from `social-media`";
		$social_media=$conn->query($_sql);
		?>
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add link</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New link</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_link" action="php_site/generl_input.php" method="POST">
			        	<div class="form-group">
					    <input type="text" class="form-control"  id="team_id" name="team_id" value="<?php echo $_GET['team_id']?>" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">link</label>
					    <input type="text" class="form-control" placeholder="link" id="link" name="link" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label  for="content-text" class="form-control-label">social media</label>
					    <select name="social_id" class="form-control">
					    	
					     	<?php foreach ($social_media as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" >  <?php echo $value['name']?></option>
					    	<?php } ?>

					    </select>
					    
			          </div>
			        </form>
			      </div>
			      <div id=add_error> </div> 
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="add_link_btn"  type="submit" class="btn btn-primary">Add social Link </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		

<!-- delete modal
 -->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">delete Link</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		        <form id="delete_link_form" action="php_site/generl_input.php" method="POST">
		          <div class="form-group">
				     <input type="hidden" class="form-control" name="deleted_id" id="deleted_id">
		          </div>
		          
                <center>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button id=delete_link_btn type="submit" class="btn btn-info">delete Link </button>
		        </center>
		        <br>
		        <hr>
		        </form>
		      
		    </div>
    </div>
</div>
<?php
		require 'connect_database.php';
		$_sql="select * from `social-media`";
		$social_name=$conn->query($_sql);
		?>
		<!-- model Edit  -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit link</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		   <form id="edit_link" action="php_site/generl_input.php" method="POST">
		   	<div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  id ="team_id" name="team_id" value="<?php echo $_GET['team_id']?>"aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">link</label>
					    <input type="text" class="form-control" placeholder="link" id=" edit_link" name=" edit_link"aria-describedby="basic-addon1">
			          </div>
                       
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">social media</label>
					    <select id=" social_id" name="social_id" class="form-control">

					    	<?php foreach ($social_name as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" ><?php echo $value['name']?></option>
					    	<?php } ?>
					    </select>
			          </div>
			
			        </form>
		      </div>
		      <div id="#add_error"></div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button id="edit_link_btn" type="submit" class="btn btn-info">edit </button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->
			

		<div class="col-lg-10 col-md-offset-2">	
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>team name</th>
			      <th>social media</th>
			      <th>link</th>
			    </tr>
			  </thead>
			  <tbody> 

			  	<?php foreach ($team_social as $key => $value) { ?>

				   <tr>
				      <td scope="row"> <?php echo $key+1 ?> </td>
				      <td><?php echo $value['team_name']?></td>
				      <td><?php echo $value['social_name']?></td>
				      <td><?php echo $value['link']?></td>
				      
					  <td>
					  <button data-edit_link="<?php echo $value['link']?>" data-social_name="<?php echo $value['social_name']?>" data-team_id="<?php echo $value['team-id']?>" data-social_id="<?php echo $value['social-id']?>" id="edit_link_table" type="button" class="btn btn-info" 
					  data-toggle="modal" data-target="#Edit" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
					  <td><button data-deleted_id="<?php echo $value['id']?>" data-toggle="modal" data-target="#delete" id="delete_link_table" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
					 
				    </tr> 
				<?php } ?>
			</table>
		</div>
	</div>
</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).on('click', '#add_link_btn', function(a){

	var data = new FormData(document.getElementById('add_link'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_link.php",
                            data: data,
                            async: false,
                            processData: false,
                            contentType: false,
                       })
                        .done(function (data) {
                        	console.log(data);
                        	data = data.replace(/\s/g, '');
		if (data=="success") {
			window.location.reload();
		}
		else{
			$('#add_error').html(data);
 		
		 }
		 	
 });
a.preventDefault();

	});

$(document).on('click', '#delete_link_table', function(a){
	var id = $(this).data("deleted_id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_link_btn', function(a){
	
	var data = new FormData(document.getElementById('delete_link_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_link.php",
                            data: data,
                            async: false,
                            processData: false,
                            contentType: false,
                       })
                        .done(function (data) {
                        	console.log(data);
		if (data=="sucess") {
			window.location.reload();
		}
		else{
			$('#add_error').html(data);
 		
		 }
		 	
 });
a.preventDefault();

	});
//edit slider button start
$(document).on('click', '#edit_link_btn', function(a){
	var data = new FormData(document.getElementById('edit_link'));
                   $.ajax({
                            type: 'POST', 
                            url: "edit_link.php",
                            data: data,
                            async: false,
                            processData: false,
                            contentType: false,
                       })
                        .done(function (data) {
                        	data = data.replace(/\s/g, '');

                        	console.log(data);

		if (data=="success") {
			window.location.reload();
		}
		else{
			$('#add_error').html(data);
 		
		 }
		
 });
a.preventDefault();

	});
	// edit slider button end 
//edit button in table start
$(document).on('click', '#edit_link_table', function(a){
	var link = $(this).data("link");
	var social_id = $(this).data("`social-id`");
	var team_id=$(this).data("`team-id`");
	var social_name=$(this).data("social_name");
	
	$('#edit_link').val(link);
	$('#edit_social_id').val(social_id);
	$('#edit_social_name').val(social_name);
	$('#team_id').val(team_id);


});
 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 </script>
 
<script type="text/javascript">
	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);
 
    oFReader.onload = function(oFREvent) {
    	console.log(oFREvent);
    document.getElementById("team_img").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
