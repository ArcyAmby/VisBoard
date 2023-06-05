<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

    $TransDate      = $_POST['TransDate'];
    $CustomerID       = $_POST['CustomerID'];
    $CustomerName          = $_POST['CustomerName'];
    $DesignerID            = $_POST['DesignerID'];
    $TotalAmount       = $_POST['TotalAmount'];
    $Method       = $_POST['Method'];
    $Link       = $_POST['Link'];

    settype($CommAmount, "float");
    settype($DesignerFee, "float");


    $CommAmount = $TotalAmount * 0.19;
    $DesignerFee = $TotalAmount - $CommAmount;



    $sql = "INSERT INTO transaction (TransDate, CustomerID, CustomerName, DesignerID, TotalAmount, CommAmount, DesignerFee, Method, Link ) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$TransDate, $CustomerID, $CustomerName, $DesignerID, $TotalAmount, $CommAmount, $DesignerFee, $Method, $Link]);




}else{
  echo 'No Data';
}




?>
