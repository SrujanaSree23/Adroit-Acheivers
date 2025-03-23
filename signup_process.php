<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_type = $_POST['user_type'];

    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "Email already exists. Try signing in.";
    } else {
        $sql = "INSERT INTO users (full_name, email, password, user_type) 
                VALUES ('$full_name', '$email', '$password', '$user_type')";
        if ($conn->query($sql) === TRUE) {
            header("Location: signin.html");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
$conn->close();
?>
