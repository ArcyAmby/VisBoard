<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

    $CustomerFN        = $_POST['CustomerFN'];
    $CustomerLN      = $_POST['CustomerLN'];
    $CBdate       = $_POST['CBdate'];
    $Cemail          = $_POST['Cemail'];
    $Caddress            = $_POST['Caddress'];
    $CustomerUN       = $_POST['CustomerUN'];
    $Cpass       = $_POST['Cpass'];
    $Plan       = $_POST['Plan'];

    $Plan2 = $Plan;

    settype($Plan2, "String");


    if ($Plan2 == "Free"){
      $Amount = 0.0;
    } elseif ($Plan2 ==  "Regular") {
      $Amount = 399.0;
    }elseif ($Plan2 == "Premium"){
      $Amount = 649.0;
    }
    else{
      $Amount = 0.0;;
    }



    $sql = "INSERT INTO customer (CustomerFN, CustomerLN, CBdate, Cemail, Caddress, CustomerUN, Cpass, Plan, Amount ) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$CustomerFN, $CustomerLN, $CBdate, $Cemail, $Caddress, $CustomerUN, $Cpass, $Plan, $Amount]);




}else{
  echo 'No Data';
}




?>
