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
		<!-- <div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To </button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select icon</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">adress</label>
					    <input type="text" class="form-control" placeholder="adress" id="content-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="content-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add  </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	 -->
	<!-- model Edit  -->

	<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE CONTACT</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_contact_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This CONTACT? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="delete_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- <div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">Edit </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select icon</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">adress</label>
					    <input type="text" class="form-control" placeholder="adress" id="content-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="content-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary"> Edit  </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div> -->	
		<!-- end modal edit -->

<?php
		require 'connect_database.php';
		$_sql="select * from `contact-us`";
		$contact=$conn->query($_sql);
		?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>name</th>
				      <th>email</th>
				      <th>msg</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				    	<?php foreach ($contact as $key => $value) {?>
			  	
				      <th scope="row"><?php echo $key+1;?></th>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['email']; ?></td>
				      <td><?php echo $value['msg']; ?></td>
			
				  <td><button data-id="<?php echo $value['id']; ?>" id="delete_contact" data-toggle="modal" data-target="#delete" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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
$(document).on('click', '#delete_contact', function(a){
	var id = $(this).data("id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_contact_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_contact.php",
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
 // var sure =document.getElementById('delete');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 </script>
</body>
</html>