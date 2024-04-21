<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Check if files were uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK &&
        isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {

        // Specify the directory where uploaded files will be saved
        $uploadDirectory = "uploads/";

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Move the uploaded files to the specified directory
        $imagePath = $uploadDirectory . basename($_FILES["image"]["name"]);
        $filePath = $uploadDirectory . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath) &&
            move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
            echo "Files uploaded successfully.";
        } else {
            echo "Error uploading files.";
        }
    } else {
        echo "Error: Please select files to upload.";
    }
}
?>
