$(function () {
    $("button").click(function () {
        $.ajax({
            url: "result.php",
            type: "post",
            dataType: "text",
            data: {},
            success: function (result) {
                alert(result);
            }
        });
    })
});