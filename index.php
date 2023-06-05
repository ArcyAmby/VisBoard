<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP CRUD Operation using PDO with Bootstrap/Modal</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Customer Table List</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
            <?php
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>CustomerID</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>BirthDate</th>
          <th>Email</th>
					<th>Address</th>
          <th>Username</th>
          <th>Password</th>
          <th>Plan</th>
          <th>Amount</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						include_once('connection.php');

						$db = new Connection();
    					$database = $db->open();
						try{
						    $sql = 'SELECT * FROM customer';
						    foreach ($database->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['CustomerID']; ?></td>
						    		<td><?php echo $row['CustomerFN']; ?></td>
						    		<td><?php echo $row['CustomerLN']; ?></td>
						    		<td><?php echo $row['CBdate']; ?></td>
                    <td><?php echo $row['Cemail']; ?></td>
                    <td><?php echo $row['Caddress']; ?></td>
                    <td><?php echo $row['CustomerUN']; ?></td>
                    <td><?php echo $row['Cpass']; ?></td>
                    <td><?php echo $row['Plan']; ?></td>
                    <td><?php echo $row['Amount']; ?></td>
						    		<td>
						    			<a href="#edit_<?php echo $row['CustomerID']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
						    			<a href="#delete_<?php echo $row['CustomerID']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						    		</td>
						    	
						    	</tr>
						    	<?php
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//close connection
						$database = null;

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
