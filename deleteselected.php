<?php
  

  @ $del_me = $_POST['del_me'];
 
  if(isset($del_me))
  {
    if (count($del_me) > 0)
    {
      foreach($del_me as $email)
      {
        if ($lastname=delete_user($email))
          echo 'Deleted '.htmlspecialchars($lastname).'.<br />';
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

  do_html_url('admin.php', 'go to the administrator page');
?>