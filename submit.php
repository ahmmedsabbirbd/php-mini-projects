<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landing_pages";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "SHOW TABLES LIKE 'MyGuests'";
$result = mysqli_query($conn, $query);
$tableExists = mysqli_num_rows($result) > 0;

if(!$tableExists){
    $query = "CREATE TABLE MyGuests (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        photo VARCHAR(255) NOT NULL,
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        age VARCHAR(255) NOT NULL
    );";
    $result = mysqli_query($conn, $query);
}

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);

    $temp_file = $_FILES['photo']['tmp_name'];
    $target_path = "uploads/".$_FILES['photo']['name'];
    move_uploaded_file($temp_file, $target_path);

    $photo_path = $target_path;

    $sql = "INSERT INTO MyGuests (firstname, lastname, email, age, photo) VALUES ('$firstname', '$lastname', '$email', '$age', '$photo_path')";


    if(mysqli_query($conn, $sql)) {
        // Redirect to main page
        header("Location: index.php");
        exit;
    }
}

// Close the database connection
mysqli_close($conn);