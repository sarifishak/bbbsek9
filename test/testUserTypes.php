<?php
  require_once(dirname(__FILE__).'/../model/userTypes.php');
/*
CREATE TABLE userTypes(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
    userType VARCHAR(100) NOT NULL,
    defaultPage VARCHAR(200) NOT NULL
);
*/  
?>
<html>
  <head>
    <title>DB Query PHP Page</title>
  </head>
  <body>
    <p>The debug page sites</p>
    <p>Contents of table User Types:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>userType</td>
        <td>defaultPage</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $usertypes = new UserTypes();
      $usertype_list = $usertypes->selectAlls();

      foreach($usertype_list as $usertype) {
        echo '<tr>';
        echo '<td>'.$usertype->id.'</td>';
        echo '<td>'.$usertype->userType.'</td>';
        echo '<td>'.$usertype->defaultPage.'</td>';
        echo '</tr>';
      }
    ?>
    </table> 
    <p>Contents of table User Types id=2:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>userType</td>
        <td>defaultPage</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $usertypes = new UserTypes();
      $usertypes->id = 2;
      $usertypes->foundRecord = false;
      $found = $usertypes->selectByUserTypeId();
      if ($found){
        echo '<tr>';
        echo '<td>'.$usertypes->id.'</td>';
        echo '<td>'.$usertypes->userType.'</td>';
        echo '<td>'.$usertypes->defaultPage.'</td>';
        echo '</tr>';
      } else {
        echo '<tr>';
        echo '<td>No record found</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';
      }
      
    ?>
    </table> 
    
  </body>
</html>