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
    <h2 class="text-center">Enter Travel Information</h2>

    <!-- Form for collecting data -->
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="source" class="form-label">Source</label>
            <input type="text" class="form-control" id="source" name="source" required>
        </div>
        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="mb-3">
            <label for="distance" class="form-label">Distance (in km)</label>
            <input type="number" class="form-control" id="distance" name="distance" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</div>
</body>

</html>