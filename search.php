

<h1>Book Title Search Results</h1>


<?php
	// Include connection to the DB
	mysql_connect("localhost","zechaaron","123456") or die("could not connect");
	mysql_select_db("zechlibrary") or die ("could not find db");
	

	// Run SQL 
	if(isset($_POST['search'])){
		$search_query = $_POST['search'];
		
		
		// Search by title only
		$query = mysql_query("SELECT * FROM book WHERE TITLE like '%$search_query%'") or die ("could not search");
		
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

?>