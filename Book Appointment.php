<?php
include("connection.php");

if(isset($_POST['book'])){
    $fname = $_POST['fname'];
    $page = $_POST['page'];
    $dname = $_POST['dname'];
    $aptime = $_POST['aptime'];
    $cityname = $_POST['cityname'];
    $addname = $_POST['addname'];
    $mobno = $_POST['mobno'];

    // Prepared statement to avoid SQL Injection
    // Correct table name matching the database table (case-sensitive)
$stmt = $conn->prepare("INSERT INTO book (fname, page, dname, aptime, cityname, addname, mobno) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $fname, $page, $dname, $aptime, $cityname, $addname, $mobno);

    if($stmt->execute()){
        echo "Data inserted into the database";
    } else {
        echo "Failed to insert data";
    }
    $stmt->close();
    $conn->close();
}
?>

<!-- // Form for booking an appointment with the doctor -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Appointment Form</title>

    <style>
        /* General body styling */
        body {
            background-color: #f0f4f8; /* Light blue-grey background */
            font-family: 'Arial', sans-serif;
            padding-top: 50px;
        }

        /* Form container styling */
        .form-container {
            background-color: #ffffff; /* White background for the form */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h1.heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #007bff; /* Bootstrap primary color */
            text-align: center;
            margin-bottom: 40px;
        }

        /* Form label */
        .form-label {
            font-weight: 600;
            color: #333; /* Dark grey for better contrast */
        }

        /* Input focus effect */
        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3); /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
            padding: 14px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        /* Button hover effect */
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade of the primary color */
        }

        /* Form control and select styling */
        .form-control,
        .form-select {
            padding: 12px;
            border: 1px solid #ced4da; /* Light grey border */
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Form container with background color -->
                <div class="form-container">
                    <h1 class="heading">Book Your Appointment</h1>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="fname" class="form-label">Enter Your Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Enter your name" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="page" class="form-label">Patient's Age</label>
                            <input type="number" id="page" name="page" placeholder="Enter patient's age" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="dname" class="form-label">Select the Doctor</label>
                            <select id="dname" name="dname" class="form-select" required>
                                <option value="" disabled selected>Select</option>
                                <option>Radhe Shayam Gupta</option>
                                <option>Vijaya Jain</option>
                                <option>Anuj Purohit</option>
                                <option>Deepshikha Khandelwal</option>
                                <option>Nikhil Rajawat</option>
                                <option>Preeti Sharma</option>
                                <option>Amita Bhardwaj</option>
                                <option>Shikha Saini</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="aptime" class="form-label">Appointment Time</label>
                            <input type="time" id="aptime" name="aptime" required value="12:00" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="cityname" class="form-label">Select the City</label>
                            <select id="cityname" name="cityname" class="form-select" required>
                                <option value="" disabled selected>Select</option>
                                <option>Jaipur</option>
                                <option>Jodhpur</option>
                                <option>Udaipur</option>
                                <option>Alwar</option>
                                <option>Ajmer</option>
                                <option>Dosa</option>
                                <option>Jaisalmer</option>
                                <option>Pushkar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="addname" class="form-label">Enter Your Address</label>
                            <input type="text" id="addname" name="addname" placeholder="Enter your address" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="mobno" class="form-label">Mobile Number</label>
                            <input type="tel" id="mobno" name="mobno" placeholder="Enter contact number" pattern="[0-9]{10}" required class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="book" class="btn btn-primary">Make Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
