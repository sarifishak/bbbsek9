<?php
  require_once(dirname(__FILE__).'/../model/contacts.php');
?>
<html>
  <head>
    <title>Contents of table Contacts</title>
  </head>
  <body>
    <p>Contents of table Contacts:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>MainId</td>
        <td>ContactTypeId</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>IC</td>
        <td>No Rumah</td>
        <td>Jalan</td>
        <td>Address</td>
        <td>City</td>
        <td>State</td>
        <td>Postcode</td>
        <td>Mobile</td>
        <td>Office</td>
        <td>Home</td>
        <td>Fak</td>
        <td>Email</td>
        <td>CreatedDate</td>
        <td>CraetedId</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $contacts = new Contacts();
      $contacts_list = $contacts->selectAll();

      foreach($contacts_list as $contact) {
        echo '<tr>';
        echo '<td>'.$contact->id.'</td>';
        echo '<td>'.$contact->mainId.'</td>';
        echo '<td>'.$contact->contactTypeId.'</td>';
        echo '<td>'.$contact->firstName.'</td>';
        echo '<td>'.$contact->lastName.'</td>';
        echo '<td>'.$contact->ic.'</td>';
        echo '<td>'.$contact->noRumah.'</td>';
        echo '<td>'.$contact->jalan.'</td>';
        echo '<td>'.$contact->address.'</td>';
        echo '<td>'.$contact->city.'</td>';
        echo '<td>'.$contact->state.'</td>';
        echo '<td>'.$contact->postcode.'</td>';
        echo '<td>'.$contact->mobile.'</td>';
        echo '<td>'.$contact->office.'</td>';
        echo '<td>'.$contact->home.'</td>';
        echo '<td>'.$contact->fax.'</td>';
        echo '<td>'.$contact->email.'</td>';
        echo '<td>'.$contact->createdDate.'</td>';
        echo '<td>'.$contact->createdId.'</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>