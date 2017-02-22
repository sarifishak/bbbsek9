<?php
  require_once(dirname(__FILE__).'/../model/users.php');
?>
<html>
  <head>
    <title>DB Query PHP Page</title>
  </head>
  <body>
    <p>The debug page sites</p>
    <p>Contents of table Users:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Password</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Type</td>
        <td>Status</td>
        <td>CreatedDate</td>
        <td>CraetedId</td>
        <td>UserType</td>
        <td>Default URL</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $users = new Users();
      $user_list = $users->selectAll();

      foreach($user_list as $user) {
        echo '<tr>';
        echo '<td>'.$user->id.'</td>';
        echo '<td>'.$user->username.'</td>';
        echo '<td>'.$user->password.'</td>';
        echo '<td>'.$user->firstname.'</td>';
        echo '<td>'.$user->lastname.'</td>';
        echo '<td>'.$user->userType.'</td>';
        echo '<td>'.$user->status.'</td>';
        echo '<td>'.$user->createdDate.'</td>';
        echo '<td>'.$user->createdId.'</td>';
        echo '<td>'.$user->userTypeData->userType.'</td>';
        echo '<td>'.$user->userTypeData->defaultPage.'</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>