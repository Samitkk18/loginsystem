<?php 
	
	require "header.php";

 ?>

 <main>
 	 	
 	<div class="container2">
 		<section>
 			<h1>Reset Your Password</h1>
 			<p>An email will be sent to you with instructions on how to reset your password.</p>
 			<form action="includes/reset-request.inc.php" method="POST">
 				<input type="text" name="email" placeholder="Enter you email address...">
 				<button type="submit" name="reset-request-submit">Receive new password by email</button>
 			</form>
 			<?php 
 				if(isset($_GET['reset'])) {
 					if($_GET['reset'] == "success") {
 						echo '<p>Check your email!</p>';
 					}
 				}

 			 ?>
 		</section>
 	</div>

 </main>

 <?php 

 	require "footer.php";

  ?>