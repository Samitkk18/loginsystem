<?php 

	if (isset($_POST['reset-request-submit'])) {
		$selector = bin2hex(random_bytes(8));
		$token = random_bytes(32);
		// Removed SMTP server part as somehow sendmail isnt working .. This code should work on an actual mail server when the website is hosted
		$url = "www.websitename.com/loginsystem/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

		$expires = date("U") + 1800;

		require "dbh.inc.php";

		$userEmail = $_POST['email'];
		$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			echo "There was an error1";
			exit();
		} else { 
			mysqli_stmt_bind_param($stmt, "s", $userEmail);
			mysqli_stmt_execute($stmt);

		}

		$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ? ,? ,?);";

		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			echo "There was an error2";
			exit();
		} else { 
			$hashedToken = password_hash($token, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $token, $expires);
			mysqli_stmt_execute($stmt);

		}

		mysqli_stmt_close($stmt);
		mysqli_close();

		$to = $userEmail;

		$subject = 'Reset your password';

		$message = '<p>we received a password reset request. The link to reset your password is below. If you did not make this resquest, you can ignore the mail</p>';

		$message .= '<p>Here is your password reset link: </br>';
		$message .= '<a href="' .$url. '">' .$url. '</a></p>';


		$headers = "From: Samit Kapadia\r\n";

		$headers .= "Reply To : samitkk18@gmail.com\r\n";

		$headers .= "Content-type: text/html\r\n";

		mail($to, $subject, $message, $headers);
		header("Location: ../reset-password.php?reset=success");
	} else {
		header("Location: ../index.php");
	}

 ?>