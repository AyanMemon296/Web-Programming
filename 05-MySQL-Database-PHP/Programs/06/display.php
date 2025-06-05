<?php include 'db_connect.php'; ?> 
<h3>Student Records</h3> 
<table border="1"> 
    <tr> 
        <th>Enrollment No</th> 
        <th>Name</th> 
        <th>College</th> 
        <th>Branch</th> 
        <th>Year</th> 
    </tr> 
    <?php 
    $result = $conn->query("SELECT * FROM students"); 
    while ($row = $result->fetch_assoc()) { 
        echo 
"<tr><td>{$row['EnrollmentNo']}</td><td>{$row['Name']}</td><td>{$row['College']}</td><td>{$row['Branch']}</td><td>{$row['Year']}</td></tr>"; 
    } 
    ?> 
</table> 