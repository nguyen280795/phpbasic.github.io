$(function () {
    $("button").click(function () {
        var data = $("#numbers").val().split(",");//split string -> array
        $.ajax({
            url: "result.php",//url server execute data
            type: "get",//type of method
            dataType: "json",//type data send
            data: {
                numbers: JSON.stringify(data)//data send
            },
            success: function (result) {
                $('#sum').html("Tổng các phần tử mảng: " + result['sum']);
                $('#multi').html("Tích các phần tử của mảng: " + result['multi']);
            }
        });
    })
});
