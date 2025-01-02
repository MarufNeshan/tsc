<?php
include('./header.php');
include('./sidebar.php');




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $busid = $_POST['busid'];
    $routeid = $_POST['routeid'];
    $amount = $_POST['amount'];

    // Prepare the SQL insert query
    $sql = "INSERT INTO transport (Busid, RouteId, Amount) 
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

<!-- Main Content -->
<div class="main-content">
<h2>Add Bus Payment</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="<Busid">Bus ID:</label>
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
</div>
</body>

</html>