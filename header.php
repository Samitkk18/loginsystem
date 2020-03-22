
<?php 
	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar" style="background-color: #f2fcfe;">
  <a class="navbar-brand" href="index.php">SAABS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	 <li class="nav-item active">
        <a class="nav-link" href="#"><span class="divider">|</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">PORTFOLIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
         </ul>
         <?php 
         	if(isset($_SESSION['userId'])) {

    			echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="POST">
				<button  class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
			</form>';

 			} else {
 				
 					
				echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="POST">
      			<input  class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/Email">
				<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
				<button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="login-submit">Login</button>
    			</form>
    			<a class="button" href="signup.php">Signup</a>';

 			}

          ?>
   
  </div>
</nav>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>