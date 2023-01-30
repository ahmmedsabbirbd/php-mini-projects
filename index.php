<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php include 'header.php'; ?>

		<div class="container">
			<h2>Contact Us</h2>

			<form action="submit.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="form-group">
					  	<label for="firstname">First Name:</label>
					  	<input type="text" id="firstname" name="firstname">
					  	<span id="firstNameError"></span>
					</div>

					<div class="form-group">
					  	<label for="lastname">Last Name:</label>
					  	<input type="text" id="lastname" name="lastname">
					</div>

					<div class="form-group">
					  	<label for="email">Email:</label>
					  	<input type="email" id="email" name="email">
					</div>

					<div class="form-group">
					  	<label for="age">Age Range</label>
					  	<select name="age" id="age">
					  		<option value="0-13">0-13</option>
					  		<option value="14-17">14-17</option>
					  		<option value="18-23">18-23</option>
					  		<option value="24+">24+</option>
					  	</select>
					</div>

					<div class="form-group">
					  	<label for="photo">Image:</label>
					  	<input type="file" id="photo" name="photo">
					</div>

				</fieldset>

				<input type="submit" class="button-primary" onclick="return validateForm()" value="Submit">
			</form>
		</div>
	</div>

	<script>
		function validateForm() {
		    var firstname = document.getElementById("firstname").value;
		    var email = document.getElementById("email").value;
		    var password = document.getElementById("password").value;
		    var passwordConfirm = document.getElementById("passwordConfirm").value;

		    var firstNameError = document.getElementById("firstNameError");
		    var emailError = document.getElementById("emailError");
		    var passwordError = document.getElementById("passwordError");
		    var passwordConfirmError = document.getElementById("passwordConfirmError");
		    var isValid = true;

		    if (firstname == "") {
		        firstNameError.innerHTML = "First Name must be filled out";
		        isValid = false;
		    } else {
		        firstNameError.innerHTML = "";
		    }
		    if (email == "") {
		        emailError.innerHTML = "Email must be filled out";
		        isValid = false;
		    } else {
		        emailError.innerHTML = "";
		    }
		    if (password == "") {
		        passwordError.innerHTML = "Password must be filled out";
		        isValid = false;
		    } else {
		        passwordError.innerHTML = "";
		    }
		    if (passwordConfirm == "") {
		        passwordConfirmError.innerHTML = "Confirm Password must be filled out";
		        isValid = false;
		    } else if (password != passwordConfirm) {
		        passwordConfirmError.innerHTML = "Password and Confirm Password do not match";
		        isValid = false;
		    } else {
		        passwordConfirmError.innerHTML = "";
		    }

		    return isValid;
		}
	</script>
</body>
</html>