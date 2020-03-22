<?php 
	
	require "header.php";

 ?>

 <main>
 	 	
 	<div class="container2">
 		<section>
 			<h1>Signup</h1>
 			<?php 

 				if(isset($_GET['error'])) {
 					if($_GET['error'] == "emptyfields") {
 						echo "<p>Fill in all the fields!</p>";
 					} else if($_GET['error'] == "invaliddetails") {
 							echo "<p>Fill in username and email according to the conditions!</p>";
 					} else if($_GET['error'] == "invaliddemail") {
							echo "<p>Fill in correct email!</p>";
 					} else if($_GET['error'] == "invaliduid") {
 						echo "<p>Fill in correct username!</p>";
 					} elseif ($_GET['error'] == "usernametaken") {
 						echo "<p>Username already taken</p>";
 					} else if($_GET['error'] == "passwordsdonotmatch") {
 						echo "<p>Password doesn't match</p>";
 					} else if($_GET['signup'] == "success") {
 						echo "<p>Signup Successful!!</p>";
 					}
 				}

 			 ?>
 			<form action="includes/signup.inc.php" method="POST">
 					<input type="text" class="form-control" name="uid" placeholder="Username">
 					<input type="text" class="form-control" name="mail" placeholder="Email">
 					<input type="password" class="form-control" name="pwd" placeholder="Password">
 					<input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
 					<button type="submit" name="signup-submit" class="btn btn-outline-dark my-2 my-sm-0">Signup</button>
  			</form>
  			
  			<?php 
  				if(isset($_GET['newpwd'])) {
  					if($_GET['newpwd'] == "passwordupdated") {
  						echo "<p>Your password has been reset!</p>";
  					}
  				}
  			 ?>


  			<a href="reset-password.php">Forgot you password?</a>
 		</section>
 	</div>

 </main>

 <?php 

 	require "footer.php";

  ?>