<?php
// Include database connection file
include('db_connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $participantName = $_POST['participantName'];
    $collegeName = $_POST['collegeName'];
    $participantEmail = $_POST['participantEmail'];
    $contactNo = $_POST['contactNo'];
    $collegeEmail = $_POST['collegeEmail'];
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $nodalCenterName = $_POST['nodalCenterName'];
    $nodalCoordinatorName = $_POST['nodalCoordinatorName'];
    $nodalCenterState = $_POST['nodalCenterState'];
    $regionalNodalCenterName = $_POST['regionalNodalCenterName'];
    $nodalCenterPinCode = $_POST['nodalCenterPinCode'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO workshop_registration (participant_name, college_name, participant_email, contact_no, college_email, event_name, event_date, event_time, nodal_center_name, nodal_coordinator_name, nodal_center_state, regional_nodal_center_name, nodal_center_pin_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $participantName, $collegeName, $participantEmail, $contactNo, $collegeEmail, $eventName, $eventDate, $eventTime, $nodalCenterName, $nodalCoordinatorName, $nodalCenterState, $regionalNodalCenterName, $nodalCenterPinCode);

    // Execute the statement
    if ($stmt->execute()) {
        echo '<div style="text-align: center; background-color: #d3d6db; color: black; padding: 10px; border-radius: 5px;">Registration submitted successfully</div>';
    } else {
        echo '<div style="text-align: center; background-color: #d3d6db; color: black; padding: 10px; border-radius: 5px;">Error: ' . $stmt->error . '</div>';
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!-- HTML for the Back Button -->
<div style="text-align: center; margin-top: 20px;">
    <a href="../index.php" class="btn" style="background-color: #385170; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Back</a>
</div>
