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
                $fp = @fopen($path, "r");

                // Kiểm tra file mở thành công không
                if (!$fp) {
                    echo 'Mở file không thành công';
                } else {
                    // Lặp qua từng dòng để đọc
                    while (!feof($fp)) {
                        echo fgets($fp) . '</br>';
                    }
                    //Đóng file
                    fclose($fp);
                }
            } else {
                echo "Chỉ đọc file txt";
            }
        }
    }
}
