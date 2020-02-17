
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<h1>Search Results</h1>


<?php
	// Include connection to the DB
	mysql_connect("localhost","zechaaron","123456") or die("could not connect");
	mysql_select_db("zechlibrary") or die ("could not find db");
	

	// Run SQL 
	if(isset($_POST['search'])){
		
		// Grab the desired search type
		$search_type = ($_POST["searchType"]);
		
		// Whatever was in the search box
		$search_query = $_POST['search'];
		
		// Create table to display the results
		echo "<table><tr><th>Title</th><th>ISBN</th><th>Author Last Name</th><th>Author First Name</th></tr>";
		
		
		// Display Format
		echo "<h2>$search_type Results</h2>";
		
		// ISBN Search Selected
		if($search_type == "ISBN"){
			
			// Search by title only
			$query = mysql_query("SELECT * FROM book WHERE ISBN like '%$search_query%'") or die ("could not find by ISBN search");
			$count = mysql_num_rows($query);
		
		if($count==0){
			$output = 'There was no search results';
		}
		else{
			
			
			while($row = mysql_fetch_array($query)){
				
				
				$title = $row['Title'];
				$ISBN = $row['ISBN'];
				$AuthorLastName=$row['Author_LastName'];
				$AuthorFirstName=$row['Author_FirstName'];
				
				// populate the table with data
				 echo "<tr><td>".$row["Title"]."</td><td>".$row["ISBN"]."</td><td>".$row["Author_LastName"]."</td><td>".$row["Author_FirstName"]."</td></tr>";
				
				
				// Display Result
				$output = $ISBN;				
			} 
		}
		
		
		}
		
		// Title Search Selected
		else if($search_type == "Title"){
			echo "Title choosen";
			$query = mysql_query("SELECT * FROM book WHERE TITLE like '%$search_query%'") or die ("could not by Title search");
				$count = mysql_num_rows($query);
		
		if($count==0){
			$output = 'There was no search results';
		}
		else{
			while($row = mysql_fetch_array($query)){
				$title = $row['Title'];
				
				// populate the table with data
				 echo "<tr><td>".$row["Title"]."</td><td>".$row["ISBN"]."</td><td>".$row["Author_LastName"]."</td><td>".$row["Author_FirstName"]."</td></tr>";
				$output = $title;
				
				
			}
		}
		print("$output");
		}
		// Author Last Name Search 
		else if($search_type == "AuthorLastName"){
			echo "Author's Last Name choosen";
				$query = mysql_query("SELECT * FROM book WHERE Author_LastName like '%$search_query%'") or die ("could not find by Author's Last Name search");
					$count = mysql_num_rows($query);
		
		if($count==0){
			$output = 'There was no search results';
		}
		else{
			while($row = mysql_fetch_array($query)){
				$title = $row['Title'];
				
				// populate the table with data
				 echo "<tr><td>".$row["Title"]."</td><td>".$row["ISBN"]."</td><td>".$row["Author_LastName"]."</td><td>".$row["Author_FirstName"]."</td></tr>";
				$output = $title;
				
				
			}
		}
		
		print("$output");
		}
		else if($search_type == "AuthorFirstName"){
			
				$query = mysql_query("SELECT * FROM book WHERE Author_FirstName like '%$search_query%'") or die ("could not find by Author's Last Name search");
				$count = mysql_num_rows($query);
		
		if($count==0){
			$output = 'There was no search results';
		}
		else{
			while($row = mysql_fetch_array($query)){
				$title = $row['Title'];
				
				// populate the table with data
				 echo "<tr><td>".$row["Title"]."</td><td>".$row["ISBN"]."</td><td>".$row["Author_LastName"]."</td><td>".$row["Author_FirstName"]."</td></tr>";
				$output = $title;
				
				
			}
		}
		
		
		
		
		
		
		
		
		
	
	}
	}
?>