<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<title>Contact Form Result</title>


</head>

<body>
    <main role="main" class="container-fluid">
	<h1 class="text-center"> H2I Contact Form </h1><br>

	
<table class="table table-striped">	
<tr>
	<th scope="col">User ID</th>
	<th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Email</th>
    <th scope="col">Message</th>
  </tr>
<?php
 
	
    //connect to the database
    @$db = new mysqli('localhost', 'h2i_user', 'capstone', 'h2i');
	


    if ($db->connect_error) {
        die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_error);
    }


   $query = "SELECT * FROM users";
    if ($result = $db->query($query)){
      while ($row = $result->fetch_assoc()){
	  $user_id = $row['user_id'];
	  $firstname = $row['first_name'];
      $lastname = $row['last_name'];
      $email = $row['email_address'];
      $message = $row['message'];
	 
	  echo '<tr>
				<td>'.$user_id.'</td>
				<td>'.$firstname.'</td>
				<td>'.$lastname.'</td>
				<td>'.$email.'</td>
				<td>'.$message.'</td>
			<tr>';
	
    }
	$result->free();
	}

    $db->close();
  ?>
</table>
  
  </main>
</body>

</html>