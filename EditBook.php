<Html>
<body>

<H1> Zech Library</h1>
<H2> Delete Books </H2>


<b> Locate the book record you'd like to delete. </b>

<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");

  echo '<br />';
  echo '<form name = user_table action = "deleteselected.php" method = post>';
  echo '<table width = 760 cellpadding = 2 cellspacing = 0>';
  echo "<tr><td><strong>Title</strong></td>";
  echo "<td><strong>Title</strong></td>";
  echo "<td><strong>Author Last Name</strong></td>";
  echo "<td><strong>Author First Name</strong></td>";
  echo "<td><strong>Delete?</strong></td></tr>";



  $query = "select * from book";
  $result = mysqli_query($db,$query);
  @ $num_results = mysqli_num_rows($result);
  if(mysqli_num_rows($result) >= 1){
	  echo "stuff found";

	  // Print out results
	  for($i = 0; $i < $num_results; $i++)
	  {

	        $row = mysqli_fetch_array($result);
      $isbn = stripslashes($row['ISBN']);
      $title = htmlspecialchars(stripslashes($row['Title']));
      $authorLastName = htmlspecialchars(stripslashes($row['Author_LastName']));
      $authorFirstName = htmlspecialchars(stripslashes($row['Author_FirstName']));


      echo "<tr><td><a href = showuser.php?email=$isbn>"
                         .$title."</a></td>";
      echo "<td>".$title."</td>";
      echo "<td>".$authorLastName."</td>";
      echo "<td>".$authorFirstName."</td>";
      echo "<td><input type=checkbox name=del_me[] value='$isbn'></td></tr>";

	  }
  }else{
	Echo "No results";
  }

	echo '</table><p><center>'.
        '<input type=submit value=deleteSelected>'.
        '</center></form>';

?>


<a href="index.php"> Home </a>
</body>

</html>
