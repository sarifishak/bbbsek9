<?php
  require_once(dirname(__FILE__).'/../model/contacts.php');
  require_once(dirname(__FILE__).'/../model/receivedPayment.php');
?>
<html>
  <head>
    <title>Test contact payment Page</title>
  </head>
  <body>
    <p>Test contact payment page</p>
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
        echo '<td>';
            foreach($contact->receivedPaymentList as $receivedPayment) {
                $paymentDate = date_create($receivedPayment->feeFor);
                echo '<p>"'.$receivedPayment->receiptNo.'" for '.date_format($paymentDate,"jS F, Y").'</p>';
            }
        echo '</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>
