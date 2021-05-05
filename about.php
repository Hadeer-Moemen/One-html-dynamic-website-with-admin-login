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
<!-- start  about -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#about" data-whatever="@mdo">Add To Section</button>
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="aboutLabel">New Section</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="add_section_form">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input name="image" type="file" class="form-control  btn-info" id="image">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input name="title"type="text" class="form-control" placeholder="title" id="title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">description</label>
					    <input name="description"type="text" class="form-control" placeholder="text" id="description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">icon</label>
					    <input name="icon" type="text" class="form-control" placeholder="text" id="icon" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="addsection_btn" type="submit" class="btn btn-primary">Add Section </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
   
   <!-- model delete section start -->
   <div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="delete_section" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE SECTION</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_section_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="deleted_section_id" aria-describedby="basic-addon1" id="deleted_section_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This Section? </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
			        <button type="submit" class="btn btn-primary" id="delete_section_btn"> YES </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
   <!-- model delete section end -->
		<!-- model Edit about -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editAbout" tabindex="-1" role="dialog"  aria-labelledby="Editabout" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Editabout">Edit about</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_section_form" >
			        	<div class="form-group">
			    <img width="50" height ="50" src="" id="edited_section_image">
					    <input  name="edited_section_id" type="hidden" class="form-control" placeholder="title" id="edited_section_id" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input name="edited_section_image"type="file" class="form-control  btn-info" id="upload_edited_section_image" onchange="changeimg()">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input name="edited_section_title"type="text" class="form-control" placeholder="title" id="edited_section_title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">description</label>
					    <input name="edited_section_description" type="text" class="form-control" placeholder="text" id="edited_section_description" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">icon</label>
					    <input name="edited_section_icon"type="text" class="form-control" placeholder="text" id="edited_section_icon" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="edit_section_btn"type="submit" class="btn btn-primary"> Edit section </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->

		<!-- show table about -->
		<?php
		require 'connect_database.php';
		$_sql="select * from `with-us`";
		$with=$conn->query($_sql);
		?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>icon</th>
				      <th>description</th>
				      <th>Img</th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($with as $key => $value) {?>
				    <tr>
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td><?php echo $value['title']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['icon']; ?></td>
				      <td><img width="50" height ="50" src="../course_site/images/about-us/<?php echo $value['image']; ?>"></td>
					   <td><button  data-id =" <?php echo $value['id']; ?>" data-title = "<?php echo $value['title']?>" data-description="<?php echo $value['description'];?>" data-icon="<?php echo $value['icon'];?>" id="edit_section_table_btn" data-image="<?php echo $value['image']; ?>"type="button" class="btn btn-info" data-toggle="modal" data-target="#editAbout" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button data-id =" <?php echo $value['id']; ?>" data-title = "<?php echo $value['title']?>" data-description="<?php echo $value['description'];?>" data-icon="<?php echo $value['icon'];?>" id="delete_section_table_btn" data-image="<?php echo $value['image']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete_section" data-whatever="@mdo"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
			    </tr>
			<?php } ?>
				</table>
			</div>
		</div>
	</div>	
<!-- end show table about -->

<!--  -->

<!-- start  skllis -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 ">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#skils" data-whatever="@mdo">Add To Skills</button>
			<div class="modal fade" id="skils" tabindex="-1" role="dialog" aria-labelledby="Edieskiles" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Edieskiles">New Sklis</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="addskils_form"action="php_site/generl_input.php" method="POST" >
			          <!-- <div class="form-group">
			            <label for="select" class="form-control-label">select img:</label>
			            <input type="file" class="form-control  btn-warning " id="select">
			          </div> -->
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">skill:</label>
					    <input name="skill" type="text" class="form-control" placeholder="title" id="skill" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">value:</label>
					    <input name="value" type="text" class="form-control" placeholder="rate" id="value" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="addskils_btn"type="submit" class="btn btn-primary">Add Sklis </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<!-- model Edit skils -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editSkils" tabindex="-1"  role="dialog" aria-labelledby="#skils" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="skils">Edit skiles</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="editskils_form" action="php_site/generl_input.php" method="POST">
			          <!-- <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div> -->
			          <div class="form-group">
			            <label for="title-text" class="form-control-label"></label>
					    <input type="hidden" class="form-control" placeholder="title"  name="editedskill_id" id="editedskill_id" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">skill</label>
					    <input type="text" class="form-control" placeholder="title" name="edited_skill" id=" edited_skill" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">value</label>
					    <input type="text" class="form-control" placeholder="text"  name="edited_value"id=" edited_value" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="edited_skillbtn" type="submit" class="btn btn-primary"> Edit skiles </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->
		<!--delete start -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="deleteskill" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">DELETE Skill</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_skill_form">
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="heading"  name="skill_id" aria-describedby="basic-addon1" id="deleted_id">
			          </div>
			          
			        </form>
			        <div>Are You Sure You Want To Delete This Skill? </div>
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
		$_sql="select * from skills";
		$result=$conn->query($_sql);
		?>
		<!--  show table skils -->
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>SKILL</th>
				      <th>VALUE </th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php foreach ($result as $key => $value) {?>
				    <tr>
				      <th scope="row"><?php echo $key+1; ?></th>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['skill-value']; ?></td>
					   <td><button data-id =" <?php echo $value['id']; ?>" data-title = "<?php echo $value['name']?>" data-value="<?php echo $value['skill-value'];?>" id="edit_tableskill" type="button" class="btn btn-info" data-toggle="modal" data-target="#editSkils" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button data-skill_id ="<?php echo $value['id'];?>" id="delete_skils" class="btn btn-danger" data-toggle="modal" data-target="#deleteskill" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				  <?php } ?>
				</table>
			</div>
		</div>
	</div>	
<!-- end table skllis -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

$(document).on('click', '#addskils_btn', function(a){
	var data = new FormData(document.getElementById('addskils_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_skill.php",
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

 $(document).on('click', '#delete_skils', function(a){
	var id = $(this).data("skill_id");
	$('#deleted_id').val(id);

});

// delete button start
$(document).on('click', '#delete_btn', function(a){
	var data = new FormData(document.getElementById('delete_skill_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_skill.php",
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
//edit skill button start
$(document).on('click', '#edited_skillbtn', function(a){
	var data = new FormData(document.getElementById('editskils_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edited_skill.php",
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
	// edit skill button end 
//edit button in table start
$(document).on('click', '#edit_tableskill', function(a){
	var id = $(this).data("id");
	var skill = $(this).data("name");
	var value = $(this).data("skill-value");

	$('#editedskill_id').val(id);
	$('#edited_skill').val(name);
	$('#edited_value').val(skill-value);

});
$(document).on('click', '#addsection_btn', function(a){
	var data = new FormData(document.getElementById('add_section_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "add_section.php",
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
//edit add section form start 
$(document).on('click', '#edit_section_btn', function(a){
	var data = new FormData(document.getElementById('edit_section_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "edited_section.php",
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
//edit add section form end 
	 
//edit add section button in table start
$(document).on('click', '#edit_section_table_btn', function(a){
	var id = $(this).data("id");
	var title = $(this).data("title");
	var description = $(this).data("description");
	var icon = $(this).data("icon");
	var image = $(this).data("image");

	$('#edited_section_id').val(id);
	$('#edited_section_title').val(title);
	$('#edited_section_description').val(description);
	$('#edited_section_icon').val(icon);
	$('#edited_section_image').attr('src',"../course_site/images/about-us/"+ image)

});

//edit add section button in table end
//delete button in section table start
$(document).on('click', '#delete_section_table_btn', function(a){
	var id = $(this).data("id");
	$('#deleted_section_id').val(id);

});

// delete button start
$(document).on('click', '#delete_section_btn', function(a){
	var data = new FormData(document.getElementById('delete_section_form'));
                   $.ajax({
                            type: 'POST', 
                            url: "delete_section.php",
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
	//delete button in section table end

 </script>
 <script type="text/javascript">
 	function changeimg() {
 		var oFReader=new FileReader();
 		oFReader.readAsDataURL(document.getElementById("upload_edited_section_image").files[0]);
 		oFReader.onload = function(oFREvent){document.getElementById("edited_section_image").src =oFREvent.target.result;

 		}
 	}
 	</script>
</body>
</html>