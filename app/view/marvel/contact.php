<style>
	.chatbox{
		padding:5px 5px;
		height: 400px;
		overflow:auto; 
		display:flex; 
		flex-direction:column-reverse;
	}
	.chatbox ul{list-style: none; color:green; padding-left: 0px; padding-right: 0px;}
	.chatbox ul il{display: block; border-bottom:1px dashed #ddd; margin-bottom:50px; padding-bottom:5px;}
	.chatbox ul il:last-child{display: block; border-bottom:0px dashed #ddd; margin-bottom:0px; padding-bottom:0px;}
	.chatbox b{color:#FFC200; font-style: normal; font-size: small;}
	.chatbox p{color:black; font-style: italic;}
</style>
<section class="contact py-5" id="contact">
  <div class="container">
	<div class="row">
	  <div class="col-lg-5 mr-lg-5 col-12">
	  <h2 class="mb-4">Live Chat With Me</h2>
		<div class="google-map w-100 chatbox">
		 	 <ul>
<?php
foreach($reply->chat as $chat){
	if(session_id() == $chat->session){
		echo "<li class='text-right'><b> {$chat->session} </b><img src='app/view/marvel/images/img-profile.jpg'><p>{$chat->text} </p></li>";
	}else{
		echo "<li class='text-left'><img src='app/view/marvel/images/img-profile.jpg'><b> {$chat->session} </b><p>{$chat->text} </p></li>";
	}
    
}			 				 
?>
			 
			 		<li>
						<form class="form-inline" role="form" action="<?php echo BASE_URL.'marvel_controller_class/reply_chat_function'; ?>" method="post">
							<div class="form-group py-2">
								<input type="text" class="form-control" id="text" name="text">
							</div>
							<button type="submit" class="btn btn-default" style="color:#FFC200;">Reply</button>
						</form>	
					<li>
				</ul>
		</div><br />	
		<div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
			<div class="contact-info-item">
			  <h3 class="mb-3 text-white">Say hello</h3>
			  <p class="footer-text mb-0">01775567493</p>
			  <p><a href="mailto:isratahamedsabbir@gmail.com">isratahamedsabbir@gmail.com</a></p>
			</div>

			<ul class="social-links">
				 <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
				 <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
				 <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
			</ul>
		</div>
	  </div>

	  <div class="col-lg-6 col-12">
		<div class="contact-form">
		  <h2 class="mb-4">Interested to work together? Let's talk</h2>

		  <form action="<?php echo BASE_URL."marvel_controller_class/insert_message_function"; ?>" method="post">
			<div class="row">
			  <div class="col-lg-6 col-12">
				<input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
			  </div>

			  <div class="col-lg-6 col-12">
				<input type="email" class="form-control" name="email" placeholder="Email" id="email">
			  </div>

			  <div class="col-12">
				<textarea name="message" rows="14" class="form-control" id="message" placeholder="Message"></textarea>
			  </div>

			  <div class="ml-lg-auto col-lg-5 col-12">
				<input type="submit" class="form-control submit-btn" value="Send Button">
			  </div>
			</div>
		  </form>
		</div>
	  </div>

	</div>
  </div>
</section>