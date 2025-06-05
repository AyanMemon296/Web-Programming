<!-- Example: Insert Data Using Prepared Statement -->

<?php
// 1. Create database connection 
$conn = new mysqli("localhost", "root", "", "testdb");

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Prepare SQL with placeholders (?) 
$stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (?, ?)");

// 3. Bind parameters (s = string, i = integer, etc.) 
$stmt->bind_param("ss", $username, $email);

// 4. Set actual values and execute 
$username = "Ayan";
$email = "ayan@example.com";
$stmt->execute();

echo "Record inserted successfully.";

// 5. Close statement and connection 
$stmt->close();
$conn->close();
?>

<!-- Example: Select Data Using Prepared Statement -->

<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$stmt = $conn->prepare("SELECT id, username FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

$email = "ayan@example.com";
$stmt->execute();

// 6. Get the result 
$result = $stmt->get_result();
// 7. Display result 
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . ", Username: " . $row['username'] . "<br>";
}
$stmt->close();
$conn->close();
?>