<?php
// Include database connection file
include('db_connection.php');

// Fetch the data from the database
$sql = "SELECT * FROM workshop_registration";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITK Vlab- Registered Participants</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .table-wrapper {
            margin: 0 auto; /* Center the table horizontally */
            max-width: 100%; /* Limit the maximum width of the table */
        }
        .table td, .table th {
            font-size: 0.6rem; /* Reduce the font size */
            font-weight: bolder;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray for even rows */
        }
        .table tbody tr:nth-child(odd) {
            background-color: #ffffff; /* White for odd rows */
        }
        .btn-center {
            display: inline-block; /* Ensure the button is treated as inline block for centering */
            width: 150px; /* Set a specific width for the button */
            text-align: center; /* Center text within the button */
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <h3 class="text-center">Registered Participants</h3>
        <div class="table-wrapper mt-4">
            <?php if ($result->num_rows > 0): ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Participant Name</th>
                            <th>College Name</th>
                            <th>Participant Email</th>
                            <th>Contact No</th>
                            <th>College Email</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Nodal Center Name</th>
                            <th>Nodal Coordinator Name</th>
                            <th>Nodal Center State</th>
                            <th>Regional Nodal Center Name</th>
                            <th>Nodal Center Pin Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['participant_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['college_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['participant_email']); ?></td>
                                <td><?php echo htmlspecialchars($row['contact_no']); ?></td>
                                <td><?php echo htmlspecialchars($row['college_email']); ?></td>
                                <td><?php echo htmlspecialchars($row['event_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['event_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['event_time']); ?></td>
                                <td><?php echo htmlspecialchars($row['nodal_center_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['nodal_coordinator_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['nodal_center_state']); ?></td>
                                <td><?php echo htmlspecialchars($row['regional_nodal_center_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['nodal_center_pin_code']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">No registrations found.</div>
            <?php endif; ?>
        </div>
        
        <!-- Back Button -->
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-secondary btn-center">Back</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
