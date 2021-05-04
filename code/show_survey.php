<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<title>Survey Results</title>


</head>

<body>
    <main role="main" class="container-fluid">
	<h1 class="text-center"> H2I Survey Results </h1><br>

	
<table class="table table-striped">	
<tr>
	<th scope="col">Count</th>
    <th scope="col">Grade</th>
    <th scope="col">Gender</th>
    <th scope="col">Q3</th>
    <th scope="col">Q4</th>
    <th scope="col">Q5</th>
    <th scope="col">Q6</th>
	<th scope="col">Q7</th>
	<th scope="col">Q8</th>
  </tr>
<?php
 
	$count = 0;
    //connect to the database
    @$db = new mysqli('localhost', 'h2i_user', 'capstone', 'h2i');
	


    if ($db->connect_error) {
        die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_error);
    }


   $query = "SELECT * FROM survey";
    if ($result = $db->query($query)){
      while ($row = $result->fetch_assoc()){
	  $grade = $row['grade'];
      $gender = $row['gender'];
      $q3 = $row['q3'];
      $q4 = $row['q4'];
	  $q5 = $row['q5'];
	  $q6 = $row['q6'];
	  $q7 = $row['q7'];
	  $q8 = $row['q8'];
	  $count=$count + 1; 
	  echo '<tr>
				<td>'.$count.'</td>
				<td>'.$grade.'</td>
				<td>'.$gender.'</td>
				<td>'.$q3.'</td>
				<td>'.$q4.'</td>
				<td>'.$q5.'</td>
				<td>'.$q6.'</td>
				<td>'.$q7.'</td>
				<td>'.$q8.'</td>
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