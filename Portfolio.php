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
<?php
		require 'connect_database.php';
		$_sql="select * from category";
		$category=$conn->query($_sql);
		?>
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To PROJECT</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New PROJECT</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_project_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-primary" id="image" name="image">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">TITLE</label>
					    <input type="text" class="form-control" placeholder="heading" id="title" name="title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">DESCRIPTION</label>
					    <input type="text" class="form-control" placeholder="content" id="description" name="description" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">CATEGORY_NAME</label>
					    <select id="category_id"name="category_id" class="form-control">
					    	
					     	<?php foreach ($category as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" >  <?php echo $value['name']?></option>
					    	<?php } ?>

					    </select>
			          </div>
			         
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="add_project_btn" type="submit" class="btn btn-primary">Add project </button>
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
			        <h5 class="modal-title" id="EditLabel">DELETE project</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_project_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This project? </div>
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
		        <h5 class="modal-title" id="Employee">edit project</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form id="edit_project" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
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
		            <label for="heading-text" class="form-control-label">TITLE</label>
				    <input type="text" class="form-control" placeholder="heading" id="edit_title" name="edit_title" aria-describedby="basic-addon1">
		          </div>
		          
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">DESCRIPTION</label>
				    <input type="text" class="form-control" placeholder="content" id="edit_description" name="edit_description" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">CATEGORY</label>
				    <select id="edit_category_id" name="edit_category_id" class="form-control">
					    	
					     	<?php foreach ($category as $key => $value) { ?>
					    	<option value="<?php echo $value['id']?>" ><?php echo $value['name']?></option>
					    	<?php } ?>

					    </select>
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button id="edit_project_btn" type="submit" class="btn btn-info">edit project </button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->	

<?php
		require 'connect_database.php';
	
		$sql="select portofolio.* , category.name as category_name from portofolio inner join category on category.id = portofolio.categ_id ";
		$project=$conn->query($sql);
		?> 		
		<div class="col-lg-10 col-md-offset-2">	
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>title</th>
			      <th>description</th>
			      <th>category</th>
			      <th>img</th>
			      <th> Edit</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($project as $key => $value) {?>
			  	
				   <tr>
				      <td scope="row"><?php echo $key+1;?> </td>
				      <td><?php echo $value['title']; ?></td>
				      <td><?php echo $value['description'];?></td>
				      <td><?php echo $value['category_name'];?></td>
				      <td><img height="42" width="42" src="../course_site/images/portfolio/<?php echo $value['image'];?>" alt="team member" /></td>
					  <td>
					  <button data-id ="<?php echo $value['id']; ?>" data-title = "<?php echo $value['title']?>" data-description="<php echo $value['description']?>" data-category="<?php echo $value['category_name'];?>" id="edit_table" data-image="<?php echo $value['image']; ?>"  type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
					  <td><button data-id ="<?php echo $value['id'];?>" data-toggle="modal" data-target="#delete" id="delete_project" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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


 $(document).on('click', '#add_project_btn', function(a){
	var data = new FormData(document.getElementById('add_project_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_project.php",
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

$(document).on('click', '#delete_project', function(a){
	var id = $(this).data("id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_project_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_project.php",
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
$(document).on('click', '#edit_project_btn', function(a){
	var data = new FormData(document.getElementById('edit_project'));
                   $.ajax({
                            type: 'POST', 
                            url: "edit_project.php",
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
	var title = $(this).data("title");
	var description = $(this).data("description");
	var categ_id = $(this).data("categ_id");
	var image = $(this).data("image");

	$('#edit_id').val(id);
	$('#edit_title').val(title);
	$('#edit_description').val(description);
	$('#edit_category_id').val(categ_id);
	$('#edit_image').attr('src',"../course_site/images/portfolio/"+ image)

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

<!-- start table slider -->
	<!-- <div class="container">
		<div class="row">
		 <div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To project</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New project</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control" placeholder="desc" id="content-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add project </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	 -->

		<!-- model Edit  -->
		<!-- <div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="project" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="project">Edit project</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			        <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control" placeholder="desc" id="content-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary"> Edit project </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	 -->
		<!-- end modal edit -->

			<!-- <div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>heading</th>
				      <th>icon</th>
				      <th>content</th>
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td> Mark</td>
				      <td>Mark</td>
				      <td>Mark</td>
					   <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				 	 <td><button id="delete" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				    </tr>
				</table>
			</div>
		</div>
	</div>	 -->
<!-- end table slider -->

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

 var sure =document.getElementById('delete');
 sure.onclick = function () {
  	test = confirm('are you suer delete');
 	if (test === true) {
 		alert('deleted succssfuly');
 	} 
 }

 </script> -->
</body>
</html>