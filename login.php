<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM librarians WHERE employee_id = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $employee_id, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        header("Location: dashboard.php");
        exit();
    } else {
        
        echo "<script>alert('Invalid Employee ID or Password');</script>";
    }
    $stmt->close();
}

$conn->close();
?>php