<?php include 'db_connect.php'; ?> 
<form method="post"> 
    Enrollment No: <input type="text" name="enroll" required><br> 
    New Branch: <input type="text" name="branch" required><br> 
    New Year: <input type="number" name="year" required><br> 
    <input type="submit" name="submit" value="Update"> 
</form> 
 
<?php 
if (isset($_POST['submit'])) { 
    $sql = "UPDATE students SET Branch = ?, Year = ? WHERE EnrollmentNo = ?"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("sis", $_POST['branch'], $_POST['year'], $_POST['enroll']); 
    $stmt->execute(); 
    echo "Record updated successfully"; 
} 
?> 