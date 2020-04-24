<?php
  // Connect to DB
  $db = mysqli_connect("localhost","root","","zechlibrary");
  //update $query

  //echo $_POST'[ISBN'];



  $sql = "Update book SET ISBN='$_POST[ISBN]',Title='$_POST[Title]', Author_LastName='$_POST[Author_LastName]'
  , Author_FirstName='$_POST[Author_FirstName]',Copies='$_POST[Copies]'
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

<html>
<title> Confirmation </title>
<body>
<form name="form1" action="" method="post">
  <input type = "submit" name = "submit1" value="Back">
</body>
</html>

<?php
if(isset($_POST["submit1"]))
{
  header('Location:index.php');
}
?>
