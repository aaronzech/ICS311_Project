<Html>
<body>

<H1> Zech Library</h1>
<H2> Edit Patron Records </H2>


<b> Locate the patron record you'd like to edit. </b>

<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");
  //Select $query
  $sql = "Select * from patron";
  //Execute $query
  $records = mysqli_query($db,$sql);
?>

<table>
  <tr>
	<th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone</th>
    <th>State</th>
	<th>City</th>
	<th>Zip</th>
	<th>Veteran Status <br>(1 for yes, 0 for no)</th>
	
  </tr>
  <?php
    while($row = mysqli_fetch_array($records))
    {
      // Display each $records
        echo "<tr><form action=editSelectedPatron.php method =post>";
		echo "<td><input type = text name =Id value='".$row['Id']."'</td>";
        echo "<td><input type = text name =First_Name value='".$row['First_Name']."'</td>";
        echo "<td><input type = text name =Last_Name   value='".$row['Last_Name']."'</td>";
        echo "<td><input type = text name =Phone_Number  value='".$row['Phone_Number']."'</td>";
        echo "<td><input type = text name =State value='".$row['State']."'</td>";
		echo "<td><input type = text name =City value='".$row['City']."'</td>";
		echo "<td><input type = text name =Zip_Code value='".$row['Zip_Code']."'</td>";
		echo "<td><input type = text name =Veteran_Status value='".$row['Veteran_Status']."'</td>";
        echo "<td><input type = submit value='Update'>";
        echo "</form></tr>";
    }

    ?>


<a href="index.php"> Home </a>
</body>

</html>
