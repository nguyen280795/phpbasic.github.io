<?php
$nameFile = $_POST['nameFile'] . '.csv';
/////**
//// * @param $fileName
//// */
function downloadFile($fileName)
{
    $fp = 'file/' . $fileName;
    $fo = fopen($fp, 'rb');
    header('Content-Type: application/force-download');
    header('Content-Length: ' . filesize($fp));
    header('Content-Disposition: attachment; filename=' . $fileName);
    fpassthru($fo);
    fclose($fo);
}

sleep(3);
downloadFile($nameFile);
