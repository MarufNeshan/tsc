<?php
include('./header.php');
include('./sidebar.php');
?>
<style>
    /* Basic reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    td {
        background-color: #f9f9f9;
    }

    tr:nth-child(even) td {
        background-color: #f1f1f1;
    }

    tr:hover td {
        background-color: #ddd;
    }
</style>
<!-- Main Content -->
<div class="main-content">
    <h1>Fear Details</h1>

    <!-- User Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bus ID</th>
                <th>Route ID</th>
                <th>Amount</th>
             
              
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch user data
            $sql = "SELECT * FROM fare";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['Busid'] . "</td>
                            <td>" . $row['RouteId'] . "</td>
                            <td>" . $row['Amount'] . "</td>
                          
                            
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</body>

</html>