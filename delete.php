<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM customer WHERE CustomerID = '".$_GET['CustomerID']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Member deleted successfully' : 'Something went wrong. Cannot delete member';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Select member to delete first';
	}

	header('location: index.php');

?>
