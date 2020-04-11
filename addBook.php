
<Html>
<body>

<H1> Zech Library</h1>
<H2> Add Books </H2>

<?php 
// Connect to DB
	$db = mysqli_connect("localhost","root","","zechLibrary");;
	
	// Run SQL 
	if(isset($_POST['addbook_btn'])){
		
	$title = mysql_real_escape_string($_POST['title']);
	$authorLastName = mysql_real_escape_string($_POST['Author_LastName']);
	$authorFirstName = mysql_real_escape_string($_POST['Author_FirstName']);
	$isbn = mysql_real_escape_string($_POST['isbn']);	
	
	$sql = "INSERT INTO book(ISBN,Title,Author_LastName,Author_FirstName) VALUES ('$isbn','$title','$authorLastName',
	'$authorFirstName')";
	//echo "SQL:" ;echo $sql;
	$query = mysqli_query($db,$sql);
	if($query) {
		echo "Book added";
	}
	}
	
?>

<form method ="post" action="addBook.php">
	<table>
		<tr>
			<td>Title:</td>
			<td><input type = "text" name ="title" class="textInput"></td>
		</tr>
		<tr>
			<td>Author Last Name:</td>
			<td><input type = "text" name ="Author_LastName" class="textInput"></td>
		</tr>
		<tr>
			<td>Author First Name:</td>
			<td><input type = "text" name ="Author_FirstName" class="textInput"></td>
		</tr>
		<tr>
			<td>ISBN:</td>
			<td><input type = "text" name ="isbn" class="textInput"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type = "submit" name="addbook_btn" value="Register"></td>
		</tr>
	</table>
</form>
<a href="index.php"> Home </a>
</body>
</html>