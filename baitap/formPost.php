<html>
<body>
<form action="formPost.php" method="post">
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
Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["password"]; ?>
</body>
</html>
<!--Phương thức post khi gửi lên sẽ đưa thông tin qua acction và không có hiện thông tin nhập trên thanh http-->
<!--Khi sử dụng phương thức post sẽ được bảo mật hơn phương thức get-->
<!--Nên sử dụng phương thức post: update, delete khi truy vấn, dùng để đăng kí, đăng nhập-->
