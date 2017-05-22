<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="avatar"/>
    <input type="submit" name="uploadclick" value="Upload"/>
</form>
<?php
if (isset($_POST['uploadclick'])) {
    if (isset($_FILES['avatar'])) {
        if (!is_uploaded_file($_FILES['avatar']['tmp_name'])) {
            echo "File upload bị lỗi";
        } else {
            // Upload file
            move_uploaded_file($_FILES['avatar']['tmp_name'], './images/' . $_FILES['avatar']['name']);
            echo 'File Uploaded';
        }
    }
} else {
    echo 'Bạn chưa chọn file upload';
}
?>
</body>
</html>