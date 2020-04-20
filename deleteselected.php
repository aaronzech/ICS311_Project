<?php

  @ $del_me = $_POST['del_me'];

  if(isset($del_me))
  {
    if (count($del_me) > 0)
    {
      foreach($del_me as $email)
      {
        if ($lastname=$email){
          // SQL
          $sql = "Delete from book WHERE ISBN ='$lastname'";
          //echo $sql;
          // Connect to DB
          $db = mysqli_connect("localhost","root","","zechLibrary");

          $query = mysqli_query($db,$sql);
          if($query) {
            echo "Book deleted";

          }


          echo 'Deleted '.htmlspecialchars($lastname).'.<br />';}
        else
          echo 'Could not delete one user.<br />';
      }
    }
    else
      echo 'No user selected for deletion';
  }
  else
  {
    echo 'You have not chosen any user to delete.
         Please try again.<p>';
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
