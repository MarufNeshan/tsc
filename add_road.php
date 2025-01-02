<?php
include('./header.php');
include('./sidebar.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $distance = $_POST['distance'];

    // Prepare the SQL insert query
    $sql = "INSERT INTO route (name, source, Desfination, distance) 
            VALUES ('$name', '$source', '$destination', '$distance')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: road_list.php");
}
?>

<!-- Main Content -->
<div class="main-content">
    <h2>Add Bus Payment</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="Busid">Bus ID:</label>
            <input type="text" id="Busid" name="Busid" required>
        </div>
        <div class="form-group">
            <label for="RouteId">Route ID:</label>
            <input type="text" id="RouteId" name="RouteId" required>
        </div>
        <div class="form-group">
            <label for="Amount">Amount:</label>
            <input type="text" id="Amount" name="Amount" required>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>