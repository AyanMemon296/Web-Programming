<!-- Write a PHP code to upload file on server and display file details on the page (Ex. File name, Extension, File Size). -->

<!DOCTYPE html> 
<html> 
<head> 
    <title>Upload File</title> 
</head> 
<body> 
 
<h2>Upload a File</h2> 
<form method="post" enctype="multipart/form-data"> 
    <label>Select file:</label> 
    <input type="file" name="myFile" required> 
    <br><br> 
    <input type="submit" value="Upload"> 
</form> 
 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_FILES["myFile"]) && $_FILES["myFile"]["error"] == 0) { 
         
        $fileName = $_FILES["myFile"]["name"]; 
        $fileTmp = $_FILES["myFile"]["tmp_name"]; 
        $fileSize = $_FILES["myFile"]["size"]; 
        $fileType = $_FILES["myFile"]["type"]; 
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION); 
 
        $uploadFolder = "uploads/"; 
        if (!file_exists($uploadFolder)) { 
            mkdir($uploadFolder); 
        } 
 
        $destination = $uploadFolder . $fileName; 
 
        if (move_uploaded_file($fileTmp, $destination)) { 
            echo "<h3>File uploaded successfully!</h3>"; 
            echo "File Name: $fileName <br>"; 
            echo "File Extension: $fileExt <br>"; 
            echo "File Size: " . round($fileSize / 1024, 2) . " KB<br>"; 
        } else { 
            echo "Error uploading file."; 
        } 
    } else { 
        echo "No file selected or upload error."; 
    } 
} 
?>

</body> 
</html> 