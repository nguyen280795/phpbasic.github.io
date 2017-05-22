<?php
$nameFile = $_POST['fileName'];
$contentFile = $_POST['contentName'];

if (isset($_POST['fileName'])) {
    if (file_exists('file/' . $nameFile . '.csv')) {
        echo 'File tồn tại';
    } else {
        $path = tempnam('file', '');
        $file = fopen($path, 'w');
        fwrite($file, $contentFile);
        fclose($file);
        rename($path, 'file/' . $nameFile .= '.csv');
        echo "Create file success!";
    }
}
