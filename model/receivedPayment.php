<?php
  require_once(dirname(__FILE__).'/../dbmanager.php');  
?>
<?php
class ReceivedPayment{
/*

DROP TABLE IF EXISTS receivedPayment;
CREATE TABLE receivedPayment(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    receiptNo  VARCHAR(50),
    feeFor  date,
    customerId int,
    paymentType  int default 0,
    amountPaid double default 0,
    status int DEFAULT 0,
    createdDate DATETIME ,
    createdId int
);
*/
  
  var $id;
  var $receiptNo;
  var $feeFor;
  var $customerId;
  var $paymentType;
  var $amountPaid;
  var $status;
  var $createdDate;
  var $createdId;
  
  
  function selectAll(){
    $dbm = new DBManager();
    $conn = $dbm->getConnection();

    $sql_stmt = "SELECT * FROM receivedPayment order by id desc limit 50";

    //create an empty array that will eventually contain the list of users
    $contact_list=array();

    //iterate each row in retval
    foreach($conn->query($sql_stmt) as $dbfield) {
      //instantiate a user object
      $receivedPayment = new ReceivedPayment();      

      //initialize fields of user object with the columns retrieved from the query
      $receivedPayment->id = $dbfield['id'];
      $receivedPayment->receiptNo = $dbfield['receiptNo'];
      $receivedPayment->feeFor = $dbfield['feeFor'];
      $receivedPayment->customerId = $dbfield['customerId'];
      $receivedPayment->paymentType = $dbfield['paymentType'];
      $receivedPayment->amountPaid = $dbfield['amountPaid'];
      $receivedPayment->status = $dbfield['status'];
      $receivedPayment->createdDate = $dbfield['createdDate'];
      $receivedPayment->createdId = $dbfield['createdId'];
      
      //add the user object in the array
      $receivedPayment_list[] = $receivedPayment;
    }

    //return the array
    return $receivedPayment_list;
  }
  
  
  function selectAllByCustomerId(){
    $dbm = new DBManager();
    $conn = $dbm->getConnection();

    $sql_stmt = "SELECT * FROM receivedPayment WHERE customerId=? order by id desc limit 50";
    $stmt = $conn->prepare($sql_stmt);
    $stmt->execute(array($this->customerId));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row_count = $stmt->rowCount();

    //create an empty array that will eventually contain the list of users
    $receivedPayment_list=array();

    //iterate each row in retval
    //foreach($conn->query($sql_stmt) as $dbfield) {
    foreach($rows as $dbfield) {
      //instantiate a user object
      $receivedPayment = new ReceivedPayment();      

      //initialize fields of user object with the columns retrieved from the query
      $receivedPayment->id = $dbfield['id'];
      $receivedPayment->receiptNo = $dbfield['receiptNo'];
      $receivedPayment->feeFor = $dbfield['feeFor'];
      $receivedPayment->customerId = $dbfield['customerId'];
      $receivedPayment->paymentType = $dbfield['paymentType'];
      $receivedPayment->amountPaid = $dbfield['amountPaid'];
      $receivedPayment->status = $dbfield['status'];
      $receivedPayment->createdDate = $dbfield['createdDate'];
      $receivedPayment->createdId = $dbfield['createdId'];
      
      //add the user object in the array
      $receivedPayment_list[] = $receivedPayment;
    }

    //return the array
    return $receivedPayment_list;
  }
  function selectById(){
  	
    $dbm = new DBManager();
    $conn = $dbm->getConnection();

    $sql_stmt = "SELECT * FROM receivedPayment WHERE id=?";
    $stmt = $conn->prepare($sql_stmt);
    $stmt->execute(array($this->id));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row_count = $stmt->rowCount();

    //iterate each row in retval
    foreach($rows as $dbfield) {
      
      //initialize fields of user object with the columns retrieved from the query
      $this->id = $dbfield['id'];
      $this->receiptNo = $dbfield['receiptNo'];
      $this->feeFor = $dbfield['feeFor'];
      $this->customerId = $dbfield['customerId'];
      $this->paymentType = $dbfield['paymentType'];
      $this->amountPaid = $dbfield['amountPaid'];
      $this->status = $dbfield['status'];
      $this->createdDate = $dbfield['createdDate'];
      $this->createdId = $dbfield['createdId'];
    }

  }
  
  
  function selectByCustomerId(){
    $dbm = new DBManager();
    $conn = $dbm->getConnection();

    $sql_stmt = "SELECT * FROM receivedPayment WHERE customerId=? order by id desc limit 10";
    $stmt = $conn->prepare($sql_stmt);
    $stmt->execute(array($this->customerId));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row_count = $stmt->rowCount();

    //create an empty array that will eventually contain the list of users
    $receivedPayment_list=array();

    //iterate each row in retval
    //foreach($conn->query($sql_stmt) as $dbfield) {
    foreach($rows as $dbfield) {
      //instantiate a user object
      $receivedPayment = new ReceivedPayment();      

      //initialize fields of user object with the columns retrieved from the query
      $receivedPayment->id = $dbfield['id'];
      $receivedPayment->receiptNo = $dbfield['receiptNo'];
      $receivedPayment->feeFor = $dbfield['feeFor'];
      $receivedPayment->customerId = $dbfield['customerId'];
      $receivedPayment->paymentType = $dbfield['paymentType'];
      $receivedPayment->amountPaid = $dbfield['amountPaid'];
      $receivedPayment->status = $dbfield['status'];
      $receivedPayment->createdDate = $dbfield['createdDate'];
      $receivedPayment->createdId = $dbfield['createdId'];
      
      //add the user object in the array
      $receivedPayment_list[] = $receivedPayment;
    }

    //return the array
    return $receivedPayment_list;
  }
}
?>