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
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Clints</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Clints</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_client" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning"  name="image">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">name</label>
					    <input type="text" class="form-control" placeholder="desc"  name="name" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">feedback</label>
					    <input type="text" class="form-control" placeholder="feedback"  name="description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">url</label>
					    <input type="text" class="form-control" placeholder="url"  name="url"aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button  id=add_client_btn type="submit" class="btn btn-primary">Add Clints </button>
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
			        <h5 class="modal-title" id="EditLabel">Edit Client</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="edit_client_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			        	<div class="form-group">
			            <img width="50" height ="50" src="" id="edit_img">
			          </div>
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  id ="edit_id" name="edit_id" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="upload_image" name="edit_img">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">name</label>
					    <input type="text" class="form-control" placeholder="desc" id="edit_name" name="edit_name" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">description</label>
					    <input type="text" class="form-control" placeholder="feedback" id="edit_description" name="edit_description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">url</label>
					    <input type="text" class="form-control" placeholder="url" id="edit_url" name="edit_url" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="edit_table" type="submit" class="btn btn-primary"> Edit Client </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end modal edit -->
		<!--delete start -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="deleteclient" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE SLIDER</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_client_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This Client? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="delete_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- delete end -->
<?php
		require 'connect_database.php';
		$_sql="select * from client";
		$client=$conn->query($_sql);
		?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>name</th>
				      <th>description</th>
				      <th>url</th>
				      <th>img</th>
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				    	<?php foreach ($client as $key => $value) {?>
				    	
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td> <?php echo $value['name']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['url']; ?></td>
				      <td><img width="50" height ="50" src="../course_site/images/clients/<?php echo $value['image']; ?>"></td>
					  <td><button data-id =" <?php echo $value['id']; ?>" data-name= "<?php echo $value['name']?>" data-url= "<?php echo $value['url']?>" data-description="<?php echo $value['description'];?>" id="edit_table_btn" data-image="<?php echo $value['image']; ?>" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
					  <td><button data-client_id ="<?php echo $value['id'];?>" id="delete_client_btn" class="btn btn-danger" data-toggle="modal" data-target="#deleteclient" data-whatever="@mdo"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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

$(document).on('click', '#add_client_btn', function(a){
	var data = new FormData(document.getElementById('add_client'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_client.php",
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
 $(document).on('click', '#delete_client_btn', function(a){
	var id = $(this).data("client_id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_client_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_client.php",
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
$(document).on('click', '#edit_table', function(a){
	var data = new FormData(document.getElementById('edit_client_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edit_client.php",
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
	var name = $(this).data("name");
	var description = $(this).data("description");
	var url = $(this).data("url");
	var image = $(this).data("image");

	$('#edit_id').val(id);
	$('#edit_name').val(name);
	$('#edit_description').val(description);
	$('#edit_url').val(url);
	$('#edit_img').attr('src',"../course_site/images/clients/"+ image)

});
function changeimg() {
 		var oFReader=new FileReader();
 		oFReader.readAsDataURL(document.getElementById("upload_image").files[0]);
 		oFReader.onload = function(oFREvent){document.getElementById("edit_img").src =oFREvent.target.result;

 		}
 	}
 </script>
</body>
</html>