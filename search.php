

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
				
				// Display Result
				$output = $ISBN;				
			}
		}
		
		// Display Format
		echo "<h2>$search_type Results</h2>";
		echo "<br>";
		echo "ISBN: ";
		print("$output");
		echo "<br>";
		echo "Title: ";
		print("$title");
		echo "<br>";
		echo "Author's Last Name: ";
		print("$AuthorLastName");
		echo "<br>";
		echo "Author's First Name: ";
		print("$AuthorFirstName");
		
		}
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
				
				
				$output = $title;
				
				
			}
		}
		print("$output");
		}
		else if($search_type == "AuthorLastName"){
			echo "Author's Last Name choosen";
				$query = mysql_query("SELECT * FROM book WHERE AuthorLastName like '%$search_query%'") or die ("could not find by Author's Last Name search");
					$count = mysql_num_rows($query);
		
		if($count==0){
			$output = 'There was no search results';
		}
		else{
			while($row = mysql_fetch_array($query)){
				$title = $row['Title'];
				
				
				$output = $title;
				
				
			}
		}
		
		print("$output");
		}
		else if($search_type == "AuthorFirstName"){
			echo "Author's First Name choosen";
		}
		
		
		
		
		
		
		
		
		
	
	}

?>