<html>
<body>
<form action="formGet.php" method="get">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
Welcome <?php echo $_GET["username"]; ?><br>
Your email address is: <?php echo $_GET["password"]; ?>
</body>
</html>
<!--Phương thức get khi gửi qua acction sẽ hiện thông tin nhập vào trên thanh http-->
<!--Khi sử dụng phương thức get sẽ không được bảo mật-->
<!--Nên sử dụng phương thức get: slect khi truy vấn, dùng để seo từ khóa, những dữ liệu không cần bảo mật-->