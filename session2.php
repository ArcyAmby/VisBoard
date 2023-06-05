<?php
require_once('config.php');
?>

<?php


session_start();


	if(ISSET($_POST['login'])){
		if($_POST['Demail'] != "" || $_POST['Dpass'] != ""){

			$Demail = $_POST['Demail'];
			$Dpass = $_POST['Dpass'];
			$sql = "SELECT * FROM `designer` WHERE `Demail`=? AND `Dpass`=? ";
			$query = $db->prepare($sql);
			$query->execute(array($Demail,$Dpass));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['DesignerID'];
				header("location: designer-account.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'designer-login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'designer-login.php'</script>
			";
		}
	}

?>
