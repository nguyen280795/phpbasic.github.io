$(function () {
    $("#submit-upload").click(function () {
        var fileName = $("#nameFile").val();
        var ext = '.csv';
        var contentName = $("#contentFile").val();
        var pattern = /^([0-9a-zA-Z])*$/;
        if (fileName.length <= 0) {
            $("#result").html("Bạn chưa nhập tên file");
        } else if (pattern.test(fileName)) {
            $.ajax({
                url: "server.php",//url server execute data
                type: "post",//type of method
                dataType: "text",//type data send
                data: {
                    fileName: fileName,
                    contentName: contentName
                },
                success: function (result) {
                    $("#result").html(result);
                }
            });
        }
        else {
            $("#result").html("Tên file chỉ được nhập chữ và số");
        }
    });
});
