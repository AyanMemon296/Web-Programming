<?php include 'db_connect.php'; ?> 
<form method="post"> 
    Enrollment No to Delete: <input type="text" name="enroll" required><br> 
    <input type="submit" name="submit" value="Delete"> 
</form> 
 
<?php 
if (isset($_POST['submit'])) { 
    $sql = "DELETE FROM students WHERE EnrollmentNo = ?"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $_POST['enroll']); 
    $stmt->execute(); 
    echo "Record deleted successfully"; 
} 
?>