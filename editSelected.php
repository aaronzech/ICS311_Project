<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");
  //update $query

  //echo $_POST'[ISBN'];



  $sql = "Update book SET ISBN='$_POST[ISBN]',Title='$_POST[Title]', Author_LastName='$_POST[Author_LastName]', Author_FirstName='$_POST[Author_FirstName]'
          WHERE ISBN=$_POST[ISBN]";
  echo $sql;
  //Execute $query
  if(mysqli_query($db,$sql))
  echo "hi";
    //header("refresh:1; url=index.php");
  else {
    echo "Not updated";
  }
?>
