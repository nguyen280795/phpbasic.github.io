<?php
if (isset($_POST['myFile'])) {
    echo 'Error not found file';
} else {
    if (isset($_FILES['myFile'])) {
        if (!is_uploaded_file($_FILES['myFile']['tmp_name'])) {
            echo "File upload bị lỗi";
        } else {
            if ($_FILES['myFile']['type'] == 'text/plain') {
                $path = $_FILES['myFile']['tmp_name'];
                $file = new SplFileObject($path);
                foreach ($file as $line) {
                    echo $line . '</br>';
                }
            } else {
                echo "Chỉ đọc file txt";
            }
        }
    }
}
