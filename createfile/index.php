<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create file</title>
    <script src="jquery-3.2.0.min.js"></script>
</head>
<body>
<table>
    <tr>
        <td>File name:</td>
        <td><input type="text" name="nameFile" id="nameFile" multiple/></td>
    </tr>
    <tr>
        <td>Content:</td>
        <td><textarea rows="4" cols="50" name="contentFile" id="contentFile"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit-upload" id="submit-upload" value="Create"/></td>
    </tr>
</table>
<div id="result">
</div>
<div>
    <a href="file">File create</a>
</div>
<script src="script.js"></script>
</body>
</html>