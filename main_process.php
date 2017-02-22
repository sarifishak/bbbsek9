<?php
  require_once('model/users.php');
  require_once(dirname(__FILE__).'/model/contacts.php');
?>
<?php

  $searchtxt = $_REQUEST['searchtxt'];
  //echo "searchtxt given =".$searchtxt.".<br>";
  //echo "<br>";
  //echo "You may also click <a href='debug.php'>[here]</a> to see the list of usernames and passwords.<br>";
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
      $contacts_list = $contacts->searchAllWithPayment($searchtxt);

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
                echo '<p>"Receipt '.$receivedPayment->receiptNo.'" for '.date_format($paymentDate,"F, Y").'</p>';
            }
        echo '</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>
