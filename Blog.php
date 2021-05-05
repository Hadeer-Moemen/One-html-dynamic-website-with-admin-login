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
		$_sql="select * from team";
		$team=$conn->query($_sql);
		?>
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Blog</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_blog" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="image" name='image'>
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="heading" id="title" name="title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">content</label>
					    <input type="text" class="form-control" placeholder="content" id="description" name="description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">date</label>
					    <input type="text" class="form-control" placeholder="date" id="created_at" name="created_at" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">team_name</label>
					    <select id="team_id" name="team_id" class="form-control">
					    	
					     	<?php foreach ($team as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" ><?php echo $value['name']?></option>
					    	<?php } ?>

					    </select>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="add_blog_btn" type="submit" class="btn btn-primary">Add Blog </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		
		<!-- model Edit  -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">Edit Blog</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			        <div class="modal-body">
			        <form id="edit_blog_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="edit_image" name="edit_image">
			          </div>

			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="heading" id="edit_title" name="edit_title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            
					    <input type="hidden" class="form-control" placeholder="heading" id="edit_id" name="edit_id" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">content</label>
					    <input type="text" class="form-control" placeholder="content" id="edit_description" name="edit_description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">date</label>
					    <input type="text" class="form-control" placeholder="date" id="edit_created_at" name="edit_created_at" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">team_name</label>
					    <select id="edit_team_id" name="edit_team_id" class="form-control">
					    	
					     	<?php foreach ($team as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" ><?php echo $value['name']?></option>
					    	<?php } ?>

					    </select>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="edit_btn" type="submit" class="btn btn-primary"> Edit Blog </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end modal edit -->

		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE blog</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_blog_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This blog? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="delete_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- delete end --> -->
		<?php
		require 'connect_database.php';
		$_sql="select blog.* , team.name as team_name from blog inner join team on team.id = blog.team_id";
		$blog=$conn->query($_sql);
		?>

			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      
				      <th>content</th>
				      <th>date</th>
				      <th>Team_name</th>
				      <th>Image</th>
				      
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				    	<?php foreach ($blog as $key => $value) {?>
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td> <?php echo $value['title']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['created_at']; ?></td>
                      <td ><?php echo $value['team_name']; ?></td>
                      <td><img width="50" height ="50" src="../course_site/images/blog/<?php echo $value['image']; ?>"></td>


					   <td><button data-id =" <?php echo $value['id']; ?>" data-title= "<?php echo $value['title']?>" data-created_at= "<?php echo $value['created_at']?>" data-description="<?php echo $value['description'];?>"  data-team_id="<?php echo $value['team_id'];?>" id="edit_table_btn" data-image="<?php echo $value['image']; ?>" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button data-id ="<?php echo $value['id'];?>" data-toggle="modal" data-target="#delete" id="delete_blog" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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

 $(document).on('click', '#add_blog_btn', function(a){
	var data = new FormData(document.getElementById('add_blog'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_blog.php",
                            data: data,
                            async: false,
                            processData: false,
                            contentType: false,
                       })
                        .done(function (data) {
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
//edit slider button start
$(document).on('click', '#edit_btn', function(a){
	var data = new FormData(document.getElementById('edit_blog_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edit_blog.php",
                            data: data,
                            async: false,
                            processData: false,
                            contentType: false,
                       })
                        .done(function (data) {
                        	data = data.replace(/\s/g, '');

                        	console.log(data);

		
		if (data=="successsuccess") {
			window.location.reload();
		}
		else{
			$('#add_error').html(data);
 		
		 }
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
$(document).on('click', '#edit_table_btn', function(a){
	var id = $(this).data("id");
	var title = $(this).data("title");
	var description = $(this).data("description");
	var created_at = $(this).data("created_at");
	var team_id = $(this).data("team_id");
	var image = $(this).data("image");

	$('#edit_id').val(id);
	$('#edit_title').val(title);
	$('#edit_description').val(description);
	$('#edit_created_at').val(created_at);
	$('#edit_team_id').val(team_id);
	$('#edit_image').attr('src',"../course_site/images/blog/"+ image)

});
$(document).on('click', '#delete_blog', function(a){
	var id = $(this).data("id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_blog_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_blog.php",
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
 </script>
</body>
</html>