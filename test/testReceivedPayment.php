<?php
  require_once(dirname(__FILE__).'/../model/receivedPayment.php');
?>
<html>
  <head>
    <title>Contents of table Received Payment</title>
  </head>
  <body>
<!--
  var $id;
  var $receiptNo;
  var $feeFor;
  var $customerId;
  var $paymentType;
  var $amountPaid;
  var $status;
  var $createdDate;
  var $createdId;
-->  
    <p>Contents of table Received Payment:</p>
    <table border='1'>
      <tr>
        <td>Id</td>
        <td>receiptNo</td>
        <td>feeFor</td>
        <td>customerId</td>
        <td>paymentType</td>
        <td>amountPaid</td>
        <td>status</td>
        <td>CreatedDate</td>
        <td>CreatedId</td>
      </tr>
    <?php 
      //refer to user.php for the implementation of the class User 
      $receivedPayment = new ReceivedPayment();
      $receivedPayment_list = $receivedPayment->selectAll();

      foreach($receivedPayment_list as $payment) {
        echo '<tr>';
        echo '<td>'.$payment->id.'</td>';
        echo '<td>'.$payment->receiptNo.'</td>';
        echo '<td>'.$payment->feeFor.'</td>';
        echo '<td>'.$payment->customerId.'</td>';
        echo '<td>'.$payment->paymentType.'</td>';
        echo '<td>'.$payment->amountPaid.'</td>';
        echo '<td>'.$payment->status.'</td>';
        echo '<td>'.$payment->createdDate.'</td>';
        echo '<td>'.$payment->createdId.'</td>';
        echo '</tr>';
      }
    ?>
    </table> 
  </body>
</html>