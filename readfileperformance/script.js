$(function () {
    $("#submit-upload").click(function () {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            var fileInput = $("#myFile")[0].files;
            if (fileInput.length > 0) {

                if (fileInput[0].size <= 8388608) {//check size input < 8MB
                    //create form data
                    var formData = new FormData();
                    formData.append("myFile", fileInput[0]);

                    //send data ajax
                    $.ajax({
                        url: "server.php",//url server execute data
                        type: "post",//type of method
                        dataType: "text",//type data send
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        enctype: "multipart/form-data",
                        success: function (result) {
                            $("#result").html(result);
                        }
                    });
                }
                else {
                    $("#result").html("Error: file size larger 8MB");
                }
            }
            else {
                $("#result").html("Error: Error not found file");
            }
        } else {
            alert("Please upgrade your browser, because your current browser lacks some new features we need!");
        }
    })
});
