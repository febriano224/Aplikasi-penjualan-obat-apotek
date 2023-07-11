<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Membuat koneksi dengan database
    $host = 'localhost'; // ganti dengan host Anda
    $database = 'db_login'; // ganti dengan nama database Anda
    $username = 'nama_pengguna'; // ganti dengan nama pengguna database Anda
    $password_db = 'kata_sandi'; // ganti dengan kata sandi database Anda

    $conn = mysqli_connect($host, $username, $password_db, $database);

    // Memeriksa koneksi
    if (!$conn) {
        die('Koneksi gagal: ' . mysqli_connect_error());
    }

    // Menyimpan data ke database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registrasi berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi
    mysqli_close($conn);
}
?>

<!-- Isi dari signup.html -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration or Sign Up form</title>
    <link rel="stylesheet" href="signupp.css">
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password" required>
            </div>
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
            </div>
            <div class="policy">
                <input type="checkbox" required>
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="submit" value="Sign in">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="loginprojek.html">Login now</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
