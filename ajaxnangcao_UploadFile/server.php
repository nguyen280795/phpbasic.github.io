<?php
if (isset($_POST['myFile'])) {
    echo 'Error not found file';
} else {
    if (isset($_FILES['myFile'])) {
        if (!is_uploaded_file($_FILES['myFile']['tmp_name'])) {
            echo "File upload bị lỗi";
        } else {
            // Upload file
            move_uploaded_file($_FILES['myFile']['tmp_name'], './file/' . $_FILES['myFile']['name']);
            echo 'File Uploaded';
        }
    }
}
