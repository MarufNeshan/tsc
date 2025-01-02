
<?php
include('./header.php');
include('./sidebar.php');




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    $reg_number = $_POST['reg_number'];

    // Prepare the SQL insert query
    $sql = "INSERT INTO transport (Types, Capacity, RegNumber) 
            VALUES ('$type', '$capacity', '$reg_number')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "New vehicle information has been added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: transportlist.php");
}
?>


<div class="main-content">
<h2 class="text-center">Enter Vehicle Information</h2>

<!-- Form for collecting data -->
<form action="" method="POST">
    <div class="mb-3">
        <label for="type" class="form-label">Vehicle Type</label>
        <input type="text" class="form-control" id="type" name="type" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacity (seats)</label>
        <input type="number" class="form-control" id="capacity" name="capacity" required>
    </div>
    <div class="mb-3">
        <label for="reg_number" class="form-label">Registration Number</label>
        <input type="text" class="form-control" id="reg_number" name="reg_number" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>

</body>

</html>