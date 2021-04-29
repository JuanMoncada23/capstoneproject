<!DOCTYPE html>
<!-- h2i registration
     -->
<html>
  <head>
    <meta charset="UTF-8">
    <title> Welcome  </title>
  </head>
  <link href="contact/contactstyle.css" rel="stylesheet">
  <link href="static/main.css" rel="stylesheet">
  <body>
    <?php

// Get form data values
      $first = $_POST["firstname"];
      $last = $_POST["lastname"];
      $email = $_POST["email"];
      $message = $_POST["message"];

    if (!$first || !$last || !$email ) {
        echo "You have not entered all required details.  Please go back and try again.";
        exit;
    }

    //format input
    $first = addslashes($first);
    $last = addslashes($last);
    $email = addslashes($email);
    $message = addslashes($message);

    //connect to the database
    @$db = new mysqli('localhost', 'h2i_user', 'capstone', 'h2i');

    if ($db->connect_error) {
        die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_error);
    }

    $query = "insert into users(first_name, last_name, email_address, message) values (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssss", $first, $last, $email, $message);
    $stmt->execute();

    if( $stmt->affected_rows == 1){

?>
<p>Thank you for submitting this form.</p> 
<p>We will be in contact soon.</p> 
<!-- <p>This is where to put the confirmation html.</p> --> 

<?php }  else{  ?>
  <p>Error. Please try submitting form again.<p> 
  <p>If more problems occur please email us at How2Inform@lewisu.edu</p>
  <!--<p>This is where to put an error message.</p> --> 
<?php }

    $db->close();

	?>

  </body>
 </html>
