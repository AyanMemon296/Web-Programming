<?php include 'db_connect.php'; ?> 
<form method="post"> 
    Enrollment No: <input type="text" name="enroll" required><br> 
    Name: <input type="text" name="name" required><br> 
    College: <input type="text" name="college" required><br> 
    Branch: <input type="text" name="branch" required><br> 
    Year: <input type="number" name="year" required><br> 
    <input type="submit" name="submit" value="Insert"> 
</form> 
 
<?php 
if (isset($_POST['submit'])) { 
    $sql = "INSERT INTO students VALUES (?, ?, ?, ?, ?)"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("ssssi", $_POST['enroll'], $_POST['name'], $_POST['college'], 
$_POST['branch'], $_POST['year']); 
    $stmt->execute(); 
    echo "Record inserted successfully"; 
} 
?> 