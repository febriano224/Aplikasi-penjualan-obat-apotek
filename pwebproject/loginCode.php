<?php
require_once "db-init.php";
session_start();

function hashPassword($password)
{
    return hash("sha256", $password); // Use SHA256 to hash the password
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the provided password
    $hashedPassword = hashPassword($password);

    // Query to check if the username and hashed password match in the account table
    $query = "SELECT * FROM account WHERE username = '$username' AND password = '$hashedPassword'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Fetch the row from the result
        $row = mysqli_fetch_assoc($result);

        // Successful login
        $_SESSION['id'] = $row['id']; // Store the 'id' column value in the session

        // Redirect to page2.php
        header("Location: index.html");
        exit();
    } else {
        // Invalid login credentials
        echo "Invalid username or password!";
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = hashPassword($password);

    // Query to check if the username already exists in the account table
    $checkQuery = "SELECT * FROM account WHERE username = '$username'";
    $checkResult = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Username already exists
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert the new user into the account table with the hashed password
        $insertQuery = "INSERT INTO account (username, password) VALUES ('$username', '$hashedPassword')";
        $insertResult = mysqli_query($koneksi, $insertQuery);

        if ($insertResult) {
            // Successful registration
            echo "Registration successful!";
            echo '<button class="btn"> <a href="loginprojek.php">Login</a></button>';

        } else {
            // Registration failed
            echo "Registration failed. Please try again.";
        }
    }
}
?>