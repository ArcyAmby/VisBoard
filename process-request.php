<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

    $CommDemail        = $_POST['CommDemail'];
    $CustomerID      = $_POST['CustomerID'];
    $CommEmail       = $_POST['CommEmail'];
    $Subject          = $_POST['Subject'];
    $Message            = $_POST['Message'];




    $sql = "INSERT INTO request (CommDemail, CustomerID, CommEmail, Subject, Message ) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$CommDemail, $CustomerID, $CommEmail, $Subject, $Message]);




}else{
  echo 'No Data';
}




?>
