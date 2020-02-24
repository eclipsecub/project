<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  $result = mysqli_query($conn, "SELECT * FROM supers WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($result);
  var_dump($row);

  
  // TOTAL POINTS POSSIBLE: 6

?>