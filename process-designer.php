<?php
require_once('config.php');
?>
<?php


if(isset($_POST)){

    $DesignerFN        = $_POST['DesignerFN'];
    $DesignerLN      = $_POST['DesignerLN'];
    $DesignerBD       = $_POST['DesignerBD'];
    $Demail          = $_POST['Demail'];
    $DesignerUN            = $_POST['DesignerUN'];
    $Dpass       = $_POST['Dpass'];
    $Daddress       = $_POST['Daddress'];
    $Undergrad       = $_POST['Undergrad'];
    $Program       = $_POST['Program'];
    $UnderYr       = $_POST['UnderYr'];
    $Employ1       = $_POST['Employ1'];
    $Pos1       = $_POST['Pos1'];
    $Employ2       = $_POST['Employ2'];
    $Pos2       = $_POST['Pos2'];
    $Outlook       = $_POST['Outlook'];



    $sql = "INSERT INTO designer (DesignerFN, DesignerLN, DesignerBD, Demail, DesignerUN, Dpass, Daddress, Undergrad, Program, UnderYr, Employ1, Pos1, Employ2, Pos2, DLink ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$DesignerFN, $DesignerLN, $DesignerBD, $Demail, $DesignerUN, $Dpass, $Daddress, $Undergrad, $Program, $UnderYr, $Employ1, $Pos1, $Employ2, $Pos2, $Outlook]);


    if($result){
      echo 'Registration Complete
            Click here to Log In ';
    }else{
      echo 'An error occurs while saving.';
    }

}else{
  echo 'No Data';
}


?>
