
<?php
require '../site_admin/connect_database.php';
		$_sql="select * from companyinformation";
		$campany=$conn->query($_sql);
		?>

<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact With Us</h2>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										
										<div class="col-sm-6">
											<?php foreach ($campany as $key => $value) {?>
											<div class="contact-address"><address><p><?php echo $value['name']?></p><strong><?php echo $value['address']?></strong><br><small><?php echo $value['description']?></small></address>
												<div class="social-icons">
													<a href="<?php echo $value['facebooklink']?>"><i class="fa fa-facebook"></i></a><a href="<?php echo $value['twitterlink']?>"><i class="fa fa-twitter"></i></a>
													<a href="<?php echo $value['googlepluslink']?>"><i class="fa fa-google-plus"></i></a><a href="<?php echo $value['ripplelink']?>"><i class="fa fa-dribbble"></i></a>
													<a href="<?php echo $value['linkedinlink']?>"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
											<?php }?>
										</div>
										
										<div class="col-sm-6"> 
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="#">
													<div class="form-group">
														<input  id="name" type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input id="email" type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="msg" id="msg" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button id="send_message" type="submit" class="btn btn-primary">Send</button>
														</div>
														<div id="contact_error"> </div>
													</form> 
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 
							<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2014 - <a href="">HadeerMoemen</a> | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		
		  $(document).on("click","#send_message", function (e) {
		    var name =$('#name').val();
		    var email =$('#email').val();
		    var msg =$('#msg').val();

		    $.ajax({ type: 'POST', 
                     url: "message.php",
                     data: {name :name ,email:email, msg:msg}
                  }).done(function (data) {
		                if (data=="success"){
		                	$('#contact_error').html("message sent successfully");
		                }
		                else
		                {
		                	$('#contact_error').html("failed to send message , re-try!");
		                }
		             });
                   e.preventDefault();
              });

	</script>
