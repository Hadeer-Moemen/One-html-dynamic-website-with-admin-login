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
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Employee</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_employee" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-primary" id="image" name="image">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">Name</label>
					    <input type="text" class="form-control" placeholder="heading" id="name" name="name" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">POSITION</label>
					    <input type="text" class="form-control" placeholder="content" id="position" name="position" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control  " placeholder="content" id="description" name="description" aria-describedby="basic-addon1">
			          </div>
			         
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="add_employee_btn" type="submit" class="btn btn-primary">Add Employee </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE EMPLOYEE</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_employee_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This Employee? </div>
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
 -->
 
		<!-- model Edit  -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form id="edit_employee" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
		        <div class="form-group">
		        	<img id="edit_image" style="height: 200px;width: 100%;" src="" >
		        </div>
		          <div class="form-group">
		            <label for="select" class="form-control-label">select img</label>
		            <input type="file" class="form-control  btn-info" id="upload_image" name="edit_image" 
		            onchange="previewImage();">
		          </div>
		          <div class="form-group">
				    <input type="hidden" class="form-control" placeholder="heading" id="edit_id" name="edit_id" aria-describedby="basic-addon1">
		          </div>
		          <div class="form-group">
		            <label for="heading-text" class="form-control-label">Name</label>
				    <input type="text" class="form-control" placeholder="heading" id="edit_name" name="edit_name" aria-describedby="basic-addon1">
		          </div>
		          
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">POSITION</label>
				    <input type="text" class="form-control" placeholder="content" id="edit_position" name="edit_position" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">desc</label>
				    <input type="text" class="form-control  " placeholder="content" id="edit_description"   name="edit_description" aria-describedby="basic-addon1">
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button id="edit_employee_btn" type="submit" class="btn btn-info">edit Employee </button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->	

<?php
		require 'connect_database.php';
		$_sql="select * from team";
		$team=$conn->query($_sql);
		?>
		<div class="col-lg-10 col-md-offset-2">	
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>name</th>
			      <th>position</th>
			      <th>description</th>
			      <th>img</th>
			      <th> Edit</th>
			      <th>Delete</th>
			      <th>details</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($team as $key => $value) {?>
			  	
				   <tr>
				      <td scope="row"><?php echo $key+1;?> </td>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['position'];?></td>
				      <td><?php echo $value['description'];?></td>
				      <td><img height="42" width="42" src="../course_site/images/our-team/<?php echo $value['image'];?>" alt="team member" /></td>
					  <td>
					  <button data-id ="<?php echo $value['id']; ?>" data-name = "<?php echo $value['name']?>" data-position="<php echo $value['position']?>" data-description="<?php echo $value['description'];?>" id="edit_table" data-image="<?php echo $value['image']; ?>"  type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
					  <td><button data-id ="<?php echo $value['id'];?>" data-toggle="modal" data-target="#delete" id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
					  <td><a href="team_details.php?team_id=<?php echo $value['id']?>" class="btn btn-info"><i class="fa fa-times-circle" aria-hidden="true"></i>details</a></td>

				    </tr> 
				<?php }?>
			</table>
		</div>
	</div>
</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }


 $(document).on('click', '#add_employee_btn', function(a){
	var data = new FormData(document.getElementById('add_employee'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_employee.php",
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

$(document).on('click', '#delete_team', function(a){
	var id = $(this).data("id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_employee_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_employee.php",
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
$(document).on('click', '#edit_employee_btn', function(a){
	var data = new FormData(document.getElementById('edit_employee'));
                   $.ajax({
                            type: 'POST', 
                            url: "edit_employee.php",
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
$(document).on('click', '#edit_table', function(a){
	var id = $(this).data("id");
	var name = $(this).data("name");
	var description = $(this).data("description");
	var image = $(this).data("image");

	$('#edit_id').val(id);
	$('#edit_name').val(name);
	$('#edit_description').val(description);
	$('#edit_image').attr('src',"../course_site/images/our-team/"+ image)

});

	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("upload_image").files[0]);
 
    oFReader.onload = function(oFREvent) {
    	console.log(oFREvent);
    document.getElementById("edit_image").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
