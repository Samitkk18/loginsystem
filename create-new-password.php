<?php 
	
	require "header.php";

 ?>

 <main>
 	 	
 	<div class="container2">
 		<section>
 			
 			<?php 
 				$selector = $_GET['selector'];
 				$validator = $_GET['validator'];

 				if(empty($selector) || empty($validator)) {
 					echo "Could not validate your Resquest";
 				} else {
 					if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
 						?>

 							<form action="includes/reset-password.inc.php" method="POST">
 								<input type="hidden" name="selector" value="<?php echo $selector ?>">
 								<input type="hidden" name="validator" value="<?php echo $validator ?>">
 								<input type="password" class="form-control" name="pwd" placeholder="Enter a new password...">
 								<input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm password...">
 								<button type="submit" name="reset-password-submit" class="btn btn-outline-dark my-2 my-sm-0">Reset Password</button>

 							</form>

 						<?php

 					}
 				}
 			 ?>
 					
 			<form action="" method="POST">
 				

 			</form>

 		</section>
 	</div>

 </main>

 <?php 

 	require "footer.php";

  ?>