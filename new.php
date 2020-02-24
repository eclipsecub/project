

<!-- Step 1: (2 points) Include your header here -->

<?php
include('footer.php');
?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->

<a href="index.php">Home Page</a>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->
<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<body>
    <form action="./insert.php" method="post">
      <div>
        <label>First Name:</label>
        <input name="first_name">
      </div>
      <div>
        <label>Last Name:</label>
        <input name="last_name"></input>
      </div>
      <div>
        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth">
      </div>
      <div>
        <label>Alias:</label>
        <input type="name" name="alias">
      </div>
      <div>
        <label>Active:</label>
        <input type="number" name="active">
      </div>
      <div>
        <label>Hero</label>
        <input type="number" name="hero">
      </div>
      <button type="submit">Create</button>
    </form>
  </body>
</html>

<!-- Step 5: (2 points) Include your footer here -->
<?php
include('footer.php');
?>

<!-- TOTAL POINTS POSSIBLE: 24 -->