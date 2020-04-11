

<?php
session_start();
?>


<Html>
<body>

<H1> Zech Library <?php echo  $_SESSION["username"];?> </h1>


<!-- The form -->
<form action="search.php" method ="post">

	 <label for="cars"></label>
	<select id="cars" name="searchType">
    <option value="ISBN">ISBN</option>
    <option value="Title">Title</option>
    <option value="AuthorLastName">Author Last Name</option>
    <option value="AuthorFirstName">Author First Name</option>
  </select>



  <input type="text" placeholder="What are you looking for?" name="search">
  <input type="submit" value="Search" </input>
</form>

<H4> Links </H4>
<a href="register.php">Register</a>
<br>
<a href="login.php"> Login </a><br>
<a href="logout.php"> Logout </a><br>
<a href="addBook.php"> Add Book </a><br>



</body>
</html>