<?php
    // Retrieve form values
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $number = $_POST['number'] ?? '';

        // Basic validation
        if (empty($firstName) || empty($lastName) || empty($gender) || empty($email) || empty($password) || empty($number)) {
            die('Please fill all fields.');
        }

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'test1');

        // Check if connection was successful
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        } else {
            // Securely hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare statement to insert into database
            $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");

            // Bind parameters (all as strings since we use VARCHAR for all fields)
            $stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $hashedPassword, $number);

            // Execute statement and check if the insertion is successful
            if ($stmt->execute()) {
                echo "Registration successfully...";
            } else {
                // Display error in case of failure
                echo "Error: " . $stmt->error;
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "Invalid request method.";
    }
?>

<!-- Redirect to login page -->
<script type="text/javascript">
    window.location = "login.html";
</script>
