<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  var_dump($_GET);

  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $res = mysqli_query($conn, "DELETE FROM supers WHERE id = {$_GET['id']}");

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  
  if ($res) {
    echo "The record was deleted successfully.";
  } else {
    echo "There was an error deleting the record: " . mysqli_error($conn);
  }

  // TOTAL POINTS POSSIBLE: 38
?>