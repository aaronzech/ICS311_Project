
<?php
	session_start();
	// Connect to DB
	$db = mysqli_connect("localhost","root","","zechLibrary");

	if(isset($_POST['register_btn'])){
		
		
		
		
		
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);
		
		// Prevent duplicate signup
		$emailsql = "SELECT email FROM users WHERE email = '$email'";
		$query = mysqli_query($db,$emailsql);
		$count = mysqli_num_rows($query);
		if($count>0){
			echo 'There email already taken';
		}else {
			if($password ==$password2){
			// Create user
			$password = md5($password); // has password before storing for security purposes
			$sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
			echo "SQL:" ;echo $sql;
			$query = mysqli_query($db,$sql);
			
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: index.php"); // redirect to home page4
			exit();
		} else {
			// failed
			$_SESSION['message'] = "The two passwords do not match";
		}
		}
		

	}
?>


<html>

<body>
<H2> Register</H2>

<form method ="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type = "text" name ="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type = "text" name ="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type = "password" name ="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td><input type = "password" name ="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" name="register_btn" value="Register"></td>
		</tr>
	</table>
</form>
</body>
</html>