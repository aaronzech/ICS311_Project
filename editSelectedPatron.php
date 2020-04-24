<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");
 


  $sql = "Update patron SET Id='$_POST[Id]',First_Name='$_POST[First_Name]', Last_Name='$_POST[Last_Name]',
  Phone_Number='$_POST[Phone_Number]',State='$_POST[State]',City='$_POST[City]',Zip_Code='$_POST[Zip_Code]',
  Veteran_Status='$_POST[Veteran_Status]'
          WHERE Id=$_POST[Id]";
  echo $sql;
  //Execute $query
  if(mysqli_query($db,$sql)){
	echo "hi";
	header("refresh:1; url=index.php");
  }
  else {
    echo "Not updated";
  }
?>
