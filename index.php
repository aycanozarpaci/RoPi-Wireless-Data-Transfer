<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoPi Wireless Data Transfer</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="assets/dropzone/dropzone.css" />
    <link rel="stylesheet" href="assets/style.css" />
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
                    <input name="file[]" type="file" multiple />
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
                <h4><strong>Dosya</strong> Yöneticisi</h4>
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

<script src="assets/jquery.min.js"></script>
<script src="assets/bootstrap/bootstrap.min.js"></script>
<script src="assets/dropzone/dropzone.js"></script>
<script src="assets/ropi.js"></script>
</body>
</html>

