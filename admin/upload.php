<?php
// Define the base_url function
function base_url($slug)
{
    // Replace 'yourdomain.com' with your actual domain
    return 'http://localhost/nmazini/admin/' . $slug;
}

// Check if the file was uploaded without errors
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDirectory = 'uploads/'; // Set your upload directory
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $targetPath = $uploadDirectory . $fileName;

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($fileTmpName, $targetPath)) {
        // Return the image URL
        $imageUrl = $targetPath;
        echo json_encode(['url' => $imageUrl]);
    } else {
        echo json_encode(['error' => 'Error uploading the image']);
    }
} else {
    echo json_encode(['error' => 'File upload error']);
}
?>
