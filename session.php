<?php
require_once('config.php');
?>

<?php


session_start();


	if(ISSET($_POST['login'])){
		if($_POST['Cemail'] != "" || $_POST['Cpass'] != ""){

			$Cemail = $_POST['Cemail'];
			$Cpass = $_POST['Cpass'];
			$sql = "SELECT * FROM `customer` WHERE `Cemail`=? AND `Cpass`=? ";
			$query = $db->prepare($sql);
			$query->execute(array($Cemail,$Cpass));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['CustomerID'];
				header("location: index-5.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index-4.php#login'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index-4.php#login'</script>
			";
		}
	}

?>
