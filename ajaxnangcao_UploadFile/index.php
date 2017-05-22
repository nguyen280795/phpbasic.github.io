<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Nâng Cao</title>
    <script src="jquery-3.2.0.min.js"></script>
</head>
<body>
<input type="file" name="myFile" id="myFile" multiple/>
<input type="submit" name="submit-upload" id="submit-upload" value="Upload"/>
<div id="progress">
    <div id="bar"></div>
    <div id="percent">0%</div>
</div>
<div id="result">
</div>
<div>
    <a href="file">File Upload</a>
</div>
<script src="script.js"></script>
</body>
</html>