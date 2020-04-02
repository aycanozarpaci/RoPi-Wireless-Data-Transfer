
$(document).ready(function(){
    Dropzone.options.DropzoneRoPi = {
        autoProcessQueue: false,
        maxFilesize:209715200,
        parallelUploads:9000,
        timeout: 180000,
        init: function(){
            var submitButton = document.querySelector('#submit-all');
            myDropzone = this;
            submitButton.addEventListener("click", function(){
                myDropzone.processQueue();
            });
            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                    var _this = this;
                    _this.removeAllFiles();
                }
                list_image();
            });
        },
    };

    list_image();
    function list_image()
    {
        $.ajax({
            url:"upload.php",
            success:function(data){
                $('#preview').html(data);
            }
        });
    }

    $(document).on('click', '.remove_image', function(){
        var name = $(this).attr('id');
        $.ajax({
            url:"upload.php",
            method:"POST",
            data:{name:name},
            success:function(data)
            {
                list_image();
            }
        })
    });

});
