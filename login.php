<?php
// Start the session
session_start();

// Hardcoded credentials (for demonstration purposes only)
$valid_email = "sakshi@gmail.com";
$valid_password = "sak123";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials
    if ($email === $valid_email && $password === $valid_password) {
        // Redirect to home.html on successful login
        header("Location: home.html");
        exit();
    } else {
        // Set an error message in the session
        $_SESSION['error'] = "Invalid email or password.";
        // Redirect back to login page
        header("Location: login.php");
        exit();
    }
}
?>

<!-- Include the HTML for the login page -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap1.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Login Form</h2>
                </div>
                <div class="card-body">
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']); // Clear the error message after displaying it
                            ?>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required />
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Login">
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; LLW</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>