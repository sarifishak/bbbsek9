<?php
  require_once(dirname(__FILE__).'/../model/contacts.php');
?>
<html>
  <head>
    <title>Test contact payment Page</title>
  </head>
  <body>
    <p>Test contact payment page</p>

  var $id;
  var $mainId;
  var $contactTypeId;
  var $firstName;
  var $lastName;
  var $ic;
  var $noRumah;
  var $jalan;
  var $address;
  var $city;
  var $state;
  var $postcode;
  var $mobile;
  var $office;
  var $home;
  var $fax;
  var $email;
  var $createdDate;
  var $createdId;
  
    <p>Contents of table Contacts:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>No Rumah</td>
        <td>Jalan</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Mobile</td>
        <td>Payment Info</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $contacts = new Contacts();
      $contacts_list = $contacts->selectAllWithPayment();

      foreach($contacts_list as $contact) {
        echo '<tr>';
        echo '<td>'.$contact->id.'</td>';
        echo '<td>'.$contact->noRumah.'</td>';
        echo '<td>'.$contact->jalan.'</td>';
        echo '<td>'.$contact->firstName.'</td>';
        echo '<td>'.$contact->lastName.'</td>';
        echo '<td>'.$contact->mobile.'</td>';
        echo '<td>'.$contact->createdId.'</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>