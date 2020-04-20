<Html>
<body>

<H1> Zech Library</h1>
<H2> Edit Books </H2>


<b> Locate the book record you'd like to edit. </b>

<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");
  //Select $query
  $sql = "Select * from Book";
  //Execute $query
  $records = mysqli_query($db,$sql);
?>

<table>
  <tr>
    <th>ISBN</th>
    <th>Title</th>
    <th>Author_LastName</th>
    <th>Author_FirstName</th>
  </tr>
  <?php
    while($row = mysqli_fetch_array($records))
    {
      // Display each $records
        echo "<tr><form action=editSelected.php method =post>";
        echo "<td><input type = text name =ISBN value='".$row['ISBN']."'</td>";

        // Why doesn't this display?
        echo "<td><input type = text name =Title   value='".$row['Title']."'</td>";
        echo "<td><input type = text name =Author_LastName  value='".$row['Author_LastName']."'</td>";
        echo "<td><input type = text name =Author_FirstName value='".$row['Author_FirstName']."'</td>";
        echo "<td><input type = submit>";
        echo "</form></tr>";
    }

    ?>


<a href="index.php"> Home </a>
</body>

</html>
