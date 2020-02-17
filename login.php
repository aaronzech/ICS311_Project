
<?php
	session_start();
	// Connect to DB
	$db = mysqli_connect("localhost","zechaaron","123456","ZechLibrary");

	if(isset($_POST['login_btn'])){
		
		
		
		
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
			
		$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
		$result = mysqli_query($db,$sql);
		
		if(mysqli_num_rows($result) == 1){
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			
			header("location: index.php"); // redirect to homepage
			exit();
			
		}else{
			$_Session['message'] = "Username/Password combination incorrect";
		}
	}
?>


<html>

<body>
<H2> Login</H2>

<form method ="post" action="login.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type = "text" name ="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type = "password" name ="password" class="textInput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type = "submit" name="login_btn" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>