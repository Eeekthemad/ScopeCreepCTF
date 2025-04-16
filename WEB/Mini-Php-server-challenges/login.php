<?php
// Simulate GET request parameters
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Simulate SQL injection check (case-insensitive)
if (preg_match("/'\s+or\s+1\s*=\s*1/i", $username) || preg_match("/'\s+or\s+1\s*=\s*1/i", $password)) {
    echo "Congrats! Here's your flag: SCCTF{basic_sql_injection_master}";
} else {
    echo "Invalid credentials.";
}
?>