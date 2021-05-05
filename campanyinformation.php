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
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To campany branches</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">New branch</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form id="add_branch_form" action="php_site/generl_input.php" method="POST" >
				          <div class="form-group">
				            <label for="heading-text" class="form-control-label">branch</label>
						    <input type="text" class="form-control" placeholder="heading" name="name" id="name" aria-describedby="basic-addon1">
				          </div>
				          
				          <div class="form-group">
				            <label for="heading-text" class="form-control-label">address</label>
						    <input type="text" class="form-control" placeholder="heading" name="address" id="address" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">description</label>
						    <input type="text" class="form-control" placeholder="content" name="description" id="description" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">facebooklink</label>
						    <input type="text" class="form-control" placeholder="content" name="facebooklink" id="facebooklink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">twitterlink</label>
						    <input type="text" class="form-control" placeholder="content" name="twitterlink" id="twitterlink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">googlepluslink</label>
						    <input type="text" class="form-control" placeholder="content" name="googlepluslink" id="googlepluslink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">ripplelink</label>
						    <input type="text" class="form-control" placeholder="content" name="ripplelink" id="ripplelink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">linkedinlink</label>
						    <input type="text" class="form-control" placeholder="content" name="linkedinlink" id="linkedinlink" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button name="add_branch_btn" id="add_branch_btn"type="submit" class="btn btn-primary">Add branch </button>
				      </div>
				    </div>
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
				        <h5 class="modal-title" id="EditLabel">Edit branch</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form id="edited_branch_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
				        	 
				          
				          <div class="form-group">
						    <input type="hidden" class="form-control" placeholder="heading"  name="edited_id" id="edited_id" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">branch name</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_name" id="edited_name" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">address</label>
						    <input type="text" class="form-control" placeholder="content"  name="edited_address" id="edited_address" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">description</label>
						    <input type="text" class="form-control" placeholder="content"  name="edited_description" id="edited_description" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">facebooklink</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_facebooklink" id="edited_facebooklink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">twitterlink</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_twitterlink" id="edited_twitterlink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">googlepluslink</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_googlepluslink" id="edited_googlepluslink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">ripplelink</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_ripplelink" id="edited_ripplelink" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				          	<label for="heading-text" class="form-control-label">linkedinlink</label>
						    <input type="text" class="form-control" placeholder="heading"  name="edited_linkedinlink" id="edited_linkedinlink" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button name="edited_branch_btn" id="edited_branch_btn" type="submit" class="btn btn-primary"> Edit branch </button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>	
			<!-- end modal edit -->
<?php
		require 'connect_database.php';
		$_sql="select * from companyinformation";
		$campany=$conn->query($_sql);
		?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>name</th>
				      <th>address</th>
				      <th>description</th>
				      <th>facebooklink</th>
                      <th>twitterlink</th>
                      <th>googlepluslink</th> 
                      <th>ripplelink</th>
                      <th>linkedinlink</th>
				      <th>Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr>
				  	<?php foreach ($campany as $key => $value) {?>
				    
				    	
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['address']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['facebooklink']; ?></td>
				      <td><?php echo $value['twitterlink']; ?></td>
				      <td><?php echo $value['googlepluslink']; ?></td>
				      <td><?php echo $value['ripplelink']; ?></td>
				      <td><?php echo $value['linkedinlink']; ?></td>

					  <td><button data-id =" <?php echo $value['id']; ?>" data-name = "<?php echo $value['name']?>" data-description="<?php echo $value['description'];?>" data-address="<?php echo $value['address'];?>" data-facebooklink= "<?php echo $value['facebooklink']?>" data-twitterlink = "<?php echo $value['twitterlink']?>" data-googlepluslink = "<?php echo $value['googlepluslink']?>" data-ripplelink = "<?php echo $value['ripplelink']?>" data-linkedinlink = "<?php echo $value['linkedinlink']?>"  id="edited_branch_table_btn"  type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				 	 <td><button data-branch_id ="<?php echo $value['id'];?>" id="deleted_branch_table_btn" class="btn btn-danger" data-toggle="modal" data-target="#deletebranch"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>

				    </tr>
				     <?php } ?>
				</table>
			</div>
		</div>
	</div>	
<!-- end table slider -->
<!--delete start -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="deletebranch" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE branch</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="deleted_branch_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_branch_id" aria-describedby="basic-addon1" id="deleted_branch_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This branch? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="deleted_branch_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- delete end -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
$(document).on('click', '#add_branch_btn', function(a){
	var data = new FormData(document.getElementById('add_branch_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_branch.php",
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

$(document).on('click', '#deleted_branch_table_btn', function(a){
	var id = $(this).data("branch_id");
	$('#deleted_branch_id').val(id);

});

// delete button start
$(document).on('click', '#deleted_branch_btn', function(a){
	var data = new FormData(document.getElementById('deleted_branch_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_branch.php",
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
$(document).on('click', '#edited_branch_btn', function(a){
	var data = new FormData(document.getElementById('edited_branch_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edited_branch.php",
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
$(document).on('click', '#edited_branch_table_btn', function(a){
	var id = $(this).data("id");
	var name = $(this).data("name");
	var address = $(this).data("address");
	var description = $(this).data("description");
	var facebooklink = $(this).data("facebooklink");
	var twitterlink = $(this).data("twitterlink");
	var googlepluslink = $(this).data("googlepluslink");
	var ripplelink = $(this).data("ripplelink");
	var linkedinlink = $(this).data("linkedinlink");

	$('#edited_id').val(id);
	$('#edited_name').val(name);
	$('#edited_address').val(address);
	$('#edited_description').val(description);
	$('#edited_facebooklink').val(facebooklink);
	$('#edited_twitterlink').val(twitterlink);
	$('#edited_googlepluslink').val(googlepluslink);
	$('#edited_ripplelink').val(ripplelink);
	$('#edited_linkedinlink').val(linkedinlink);

});
 
</script>
</body>
</html>