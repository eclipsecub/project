<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  var_dump($rows);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php
include('header.php');
?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->

<a href="index.php">Home Page</a>
<a href="new.php">New Page</a>

<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->

<body>
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date of Birth</th>
          <th>Alias</th>
          <th>Active</th>
          <th>Hero</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>{$row['first_name']}</td>";
            echo "<td>{$row['last_name']}</td>";
            echo "<td>{$row['date_of_birth']}</td>";
            echo "<td>{$row['alias']}</td>";
            echo "<td>{$row['active']}</td>";
            echo "<td>{$row['hero']}</td>";
            echo "<td>{$row['created_at']}</td>";
            echo "<td>{$row['updated_at']}</td>";
            echo "<td>";
            echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
            echo " | ";
            echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
            echo"</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>


<!-- Step 7: (2 points) Include your footer here -->

<?php
include('footer.php');
?>

<!-- TOTAL POINTS POSSIBLE: 34 -->