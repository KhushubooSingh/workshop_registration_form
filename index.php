<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITK Vlab- Workshop Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h3 class="text-center">Virtual Lab Workshop Registration Form</h3>
            <form action="php/registration.php" method="POST">
                <!-- Participant Name -->
                <div class="form-group">
                    <label for="participantName">Participant Name</label>
                    <input type="text" class="form-control" id="participantName" name="participantName" placeholder="Enter participant name" required>
                </div>

                <!-- College Name -->
                <div class="form-group">
                    <label for="collegeName">College Name</label>
                    <input type="text" class="form-control" id="collegeName" name="collegeName" placeholder="Enter college name" required>
                </div>

                <!-- Participant Email ID -->
                <div class="form-group">
                    <label for="participantEmail">Participant Email ID</label>
                    <input type="email" class="form-control" id="participantEmail" name="participantEmail" placeholder="Enter participant email ID" required>
                </div>

                <!-- Contact No -->
                <div class="form-group">
                    <label for="contactNo">Contact No</label>
                    <input type="tel" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number" required>
                </div>

                <!-- College Email ID -->
                <div class="form-group"> 
                    <label for="collegeEmail">College Email ID</label>
                    <input type="text" class="form-control" id="collegeEmail" name="collegeEmail" placeholder="Enter college email ID" required>
                </div>

                <!-- Event Name -->
                <div class="form-group">
                    <label for="eventName">Event Name</label>
                    <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Enter event name" required>
                </div>

                <!-- Event Date -->
                <div class="form-group">
                    <label for="eventDate">Event Date</label>
                    <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                </div>

                <!-- Event Time -->
                <div class="form-group">
                    <label for="eventTime">Event Time</label>
                    <input type="time" class="form-control" id="eventTime" name="eventTime" required>
                </div>

                <!-- Nodal Center Name -->
                <div class="form-group">
                    <label for="nodalCenterName">Nodal Center Name</label>
                    <input type="text" class="form-control" id="nodalCenterName" name="nodalCenterName" placeholder="Enter nodal center name" required>
                </div>

                <!-- Nodal Coordinator Name -->
                <div class="form-group">
                    <label for="nodalCoordinatorName">Nodal Coordinator Name</label>
                    <input type="text" class="form-control" id="nodalCoordinatorName" name="nodalCoordinatorName" placeholder="Enter nodal coordinator name" required>
                </div>

                <!-- Nodal Center College State -->
                <div class="form-group">
                    <label for="nodalCenterState">Nodal Center College State</label>
                    <select class="form-control" id="nodalCenterState" name="nodalCenterState" required>
                        <option value="">Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                
                <!-- Regional Nodal Center Name -->
                <div class="form-group">
                    <label for="regionalNodalCenterName">Regional Nodal Center Name</label>
                    <input type="text" class="form-control" id="regionalNodalCenterName" name="regionalNodalCenterName" placeholder="Enter regional nodal center name" required>
                </div>

                <!-- Nodal Center Pin Code -->
                <div class="form-group">
                    <label for="nodalCenterPinCode">Nodal Center Pin Code</label>
                    <input type="text" class="form-control" id="nodalCenterPinCode" name="nodalCenterPinCode" placeholder="Enter pin code" required>
                </div>

                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </form>
            <div class="text-center mt-3">
                <a href="php/view_registration_data.php" class="btn btn-info">Click here to see registration data</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
