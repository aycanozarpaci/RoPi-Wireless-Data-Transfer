<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
    <title>RoPi Veri Aktarımı</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="text-danger">192.168.1.40</h3>
        </div>
        <div class="col-md-12">
            <form method='post' action='' enctype='multipart/form-data'>
                <h3>Dosya Aktarım</h3>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file[]" id="file" multiple>
                            <label class="custom-file-label" for="file" data-browse="Seç">Dosya Seç</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <input type='submit' name='submit' value='Upload' class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Aktarılan Dosyalar</h3>
            <textarea name="a" class="form-control" rows="10" readonly style="height: auto"></textarea>
        </div>
        <div class="col-md-12">
            <h4 class="text-success dn"></h4>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

</body>
</html>
<?php
if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    $say=$_FILES['file']['size'];
    $total=0;
    for($i=0;$i<$countfiles;$i++){
        echo '
        <script>
    $(document).ready(function () {
        $("textarea[name=\'a\']").append("'.($i+1).'->'.$filename = $_FILES['file']['name'][$i].'\r");
    });
</script>';
        $filename = $_FILES['file']['name'][$i];
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
        $total+=$say[$i];
    }
    echo '
        <script>
    $(document).ready(function () {
        $(".dn").html("Aktarılan Dosya Sayısı : <span class=\'badge badge-success dn\'>'.$countfiles.'</span>");
    });
</script>';
    echo round($total/1024)>=1024?number_format(round($total/1024))." MB":round($total/1024)."KB";
}
?>
