
<?php

$db_host = "sql306.thsite.top";
$db_user = "thsi_43252996";
$db_pass = "Mine@#$09876";
$db_name = "thsi_43252996_insta_login";

$conn = new mysqli(
    $db_host,
    $db_user,
    $db_pass,
    $db_name
);

if ($conn->connect_error) {
    exit("Database connection failed.");
}

$conn->set_charset("utf8mb4");

?>
