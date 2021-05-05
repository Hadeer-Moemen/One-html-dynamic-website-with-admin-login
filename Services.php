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
				<div class="form col-lg-10 col-md-offset-2 marg ">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Services</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">New Services</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form id="add_service_form" action="php_site/generl_input.php" method="POST" >
				          <div class="form-group">
				            <select id="icon" name="icon" data-show-content="true" class="form-control">
                <option>Select..</option>
                <option >fa fa-cutlery</option>
                <option >fa fa-eye</option>
                <option >fa fa-heart-o</option>
                <option >fa fa-leaf</option>
                <option >fa fa-music</option>
                <option >fa fa-star</option>
                
            </select>
				          </div>
				          <div class="form-group">
				            <label for="heading-text" class="form-control-label">title</label>
						    <input type="text" class="form-control" placeholder="heading" name="title" id="title" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">description</label>
						    <input type="text" class="form-control" placeholder="content" name="description" id="description" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button name="add_service_btn" id="add_service_btn"type="submit" class="btn btn-primary">Add Services </button>
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
				        <h5 class="modal-title" id="EditLabel">Edit Services</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form id="edited_service_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
				        	<div class="col-4">
            <select id="edited_icon" name="edited_icon" data-show-content="true" class="form-control">
                <option>Select..</option>
                <option data-content="<i class='fa fa-cutlery'></i> Cutlery">fa fa-cutlery</option>
                <option data-content="<i class='fa fa-eye'></i> Eye">fa fa-eye</option>
                <option data-content="<i class='fa fa-heart-o'></i> Heart">fa fa-heart-o</option>
                <option data-content="<i class='fa fa-leaf'></i> Leaf">fa fa-leaf</option>
                <option data-content="<i class='fa fa-music'></i> Music">fa fa-music</option>
                <option data-content="<i class='fa fa-star'></i> Star">fa fa-star</option>
                
            </select>
        </div>
				          
				          <div class="form-group">
						    <input type="hidden" class="form-control" placeholder="heading"  name="edited_id" id="edited_id" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
						    <input type="text" class="form-control" placeholder="heading"  name="edited_title" id="edited_title" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
						    <input type="text" class="form-control" placeholder="content"  name="edited_description" id="edited_description" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button name="edited_service_btn" id="edited_service_btn" type="submit" class="btn btn-primary"> Edit Service </button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>	
			<!-- end modal edit -->
<?php
		require 'connect_database.php';
		$_sql="select * from service";
		$service=$conn->query($_sql);
		?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>TITLE</th>
				      <th>description</th>
				      <th>Icon</th>
				      <th>Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($service as $key => $value) {?>
				    <tr>
				    	
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td><?php echo $value['title']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['icon']; ?></td>
					  <td><button data-id =" <?php echo $value['id']; ?>" data-title = "<?php echo $value['title']?>" data-description="<?php echo $value['description'];?>" id="edited_service_table_btn" data-icon="<?php echo $value['icon']; ?>"  type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				 	 <td><button data-service_id ="<?php echo $value['id'];?>" id="deleted_service_table_btn" class="btn btn-danger" data-toggle="modal" data-target="#deleteservice"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>

				    </tr>
				     <?php } ?>
				</table>
			</div>
		</div>
	</div>	
<!-- end table slider -->
<!--delete start -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="deleteservice" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE SERVICE</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="deleted_service_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_service_id" aria-describedby="basic-addon1" id="deleted_service_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This Service? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="deleted_service_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- delete end -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
$(document).on('click', '#add_service_btn', function(a){
	var data = new FormData(document.getElementById('add_service_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_service.php",
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

$(document).on('click', '#deleted_service_table_btn', function(a){
	var id = $(this).data("service_id");
	$('#deleted_service_id').val(id);

});

// delete button start
$(document).on('click', '#deleted_service_btn', function(a){
	var data = new FormData(document.getElementById('deleted_service_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_service.php",
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
$(document).on('click', '#edited_service_btn', function(a){
	var data = new FormData(document.getElementById('edited_service_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edited_service.php",
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
$(document).on('click', '#edited_service_table_btn', function(a){
	var id = $(this).data("id");
	var title = $(this).data("title");
	var description = $(this).data("description");
	var icon = $(this).data("icon");

	$('#edited_id').val(id);
	$('#edited_title').val(title);
	$('#edited_description').val(description);
	$('#edited_icon').val(icon)

});
 
</script>
</body>
</html>