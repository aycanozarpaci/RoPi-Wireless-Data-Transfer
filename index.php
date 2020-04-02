<?php

?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoPi Wireless Data Transfer</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/dropzone/dropzone.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/dropzone/dropzone.js"></script>
    <link rel='icon' href='assets/fav.ico' type='image/x-icon'/ >
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="assets/header.svg" alt=""  height="150px">
            <h3>Zamandan Tasarruf Edin!</h3>
        </div>
        <div class="col-md-12 text-center">
            <div class="howto">
                <strong>Nasıl Bağlanırım?</strong>
                Telefonunuzda <strong>Chrome/Opera/İnternet</strong> Tarayıcınızı açıp adres çubuğuna <strong class="ip"><?php echo $localIP = getHostByName(getHostName()); ?></strong> yazınız.
            </div>
        </div>
        <div class="col-md-12">
            <h4></h4>
            <form action="upload.php" class="dropzone" id="DropzoneRoPi">
                <div class="dz-message" data-dz-message><span>Yüklemek için dokunun veya dosyaları buraya sürükleyin</span></div>
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
            <small class="text-muted float-right">
                Yüklemek istediğiniz dosyaları bu alana sürükleyip bırakınız
            </small>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-success" id="submit-all">Yükle</button>
        </div>
    </div>
</div>
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2><strong>Dosya</strong> Yöneticisi</h2>
            </div>
            <div class="col-md-12">
                <ul class="list-group" id="preview">
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="https://instagram.com/ropiyazilim">Instagram:@ropiyazilim</a>
        </div>
    </div>
</div>
</body>
</html>

<script>

$(document).ready(function(){
        Dropzone.options.DropzoneRoPi = {
            autoProcessQueue: false,
            parallelUploads:50000,
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
</script>
