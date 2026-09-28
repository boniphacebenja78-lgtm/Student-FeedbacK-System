<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

if ($name === "" || $email === "" || $message === "") {
    die("Please fill in all fields.");
}

$sql = "INSERT INTO feedback (name, email, message)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {

    echo "<h1>Feedback Submitted Successfully!</h1>";
    echo "<p>Thank you, " . htmlspecialchars($name) . ".</p>";
    echo '<p><a href="index.php">Go Back</a></p>';

} else {

    die("Database insert failed: " . $stmt->error);

}

$stmt->close();
$conn->close();

?>