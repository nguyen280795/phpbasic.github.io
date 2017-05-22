<!doctype html>
<?php
setcookie('username', 'thehalfheart', time() + 5);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
<h1>Cookie lưu trong 5s</h1>
<form action="index.php" method="post">
    <input type="submit" value="Xóa cookie ngay lập tức" name="delete">
</form>
<?php
if (isset($_COOKIE['username'])) {
    echo '</br>' . $_COOKIE['username'];
}
if (isset($_POST['delete'])) {
    setcookie("username", "", time() - 5);
}
?>
</body>
</html>