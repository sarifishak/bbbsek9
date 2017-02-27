<?php
  require_once(dirname(__FILE__).'/../model/contacts.php');
  require_once(dirname(__FILE__).'/../model/receivedPayment.php');
  
  $searchtxt = $_REQUEST['searchtxt'];
  
  if(strlen($searchtxt) > 0)
      $contacts_list = $contacts->searchAllWithPayment($searchtxt);
  else 
      $contacts_list = $contacts->selectAllWithPayment();
?>
<html>
  <head>
    <title>Test contact payment Page</title>
  </head>
  <body>
    <p>Temp contact payment page</p>
    <form action='tempPage.php' method='post'>
     <input type="text" class="form-control" placeholder="Insert search txt" name="searchtxt">
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
