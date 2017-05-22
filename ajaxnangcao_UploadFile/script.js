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
                        },
                        //event progress
                        xhr: function () {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100, 10);
                                    $('#progress').html("Progress: " + percentComplete + "%");
                                }
                            }, false);
                            return xhr;
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
