<?php
include('./header.php');
include('./sidebar.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $road_id = $_POST['road_id'];

    // Insert data into table
    $sql = "INSERT INTO your_table (name, road_id) VALUES ('$name', '$road_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; text-align:center;'>Record added successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
    header("Location: stop_list.php");

}
?>
  <!-- Main Content -->
  <div class="main-content">
  <h2>Insert Record</h2>

  <form action="" method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="road_id">Road ID:</label>
                <input type="text" id="road_id" name="road_id" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
          
   

</div>
</body>

</html>

