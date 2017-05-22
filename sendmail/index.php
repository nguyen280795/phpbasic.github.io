<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>
<body>
<form action="server.php" method="post">
    <table>
        <tr>
            <td>From:</td>
            <td><input type="email" name="from" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>To:</td>
            <td><input type="email" name="to" required></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Content:</td>
            <td><textarea name="message"cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>
</html>