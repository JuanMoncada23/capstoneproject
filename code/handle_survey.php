<!DOCTYPE html>

<!-- h2i survey
     -->
<html>
  <head>
    <meta charset="UTF-8">
    <title> H2I Survey Submit  </title>
  </head>
  <body>
    <?php

// Get form data values

      $grade = $_POST["grade"];
      $gender = $_POST["gender"];
      $q3 = $_POST["q3"];
      $q4 = $_POST["q4"];
      $q5 = $_POST["q5"];
      $q6 = $_POST["q6"];
      $q7 = $_POST["q7"];
      $q8 = $_POST["q8"];




    //format input
    $grade = addslashes($grade);
    $gender = addslashes($gender);
    $q3 = addslashes($q3);
    $q4 = addslashes($q4);
    $q5 = addslashes($q5);
    $q6 = addslashes($q6);
    $q7 = addslashes($q7);
    $q8 = addslashes($q8);

    //connect to the database
    @$db = new mysqli('localhost', 'h2i_user', 'capstone', 'h2i');


    if ($db->connect_error) {
        die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_error);
    }


    $query = "insert into survey(grade, gender, q3, q4, q5, q6, q7, q8) values (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssssss", $grade, $gender, $q3, $q4, $q5, $q6, $q7, $q8);
    $stmt->execute();

    if( $stmt->affected_rows == 1){

?>
<p>Submit Successfully, Thank you!</p>

<?php }  else{  ?>
  <p>ERRORRRRR!!!!!!!</p>
<?php }


    $db->close();

	?>

  </body>
 </html>
