<?php

//upload.php

$folder_name = 'upload/';

if(!empty($_FILES))
{
    $temp_file = $_FILES['file']['tmp_name'];
    $location = $folder_name . $_FILES['file']['name'];
    move_uploaded_file($temp_file, $location);
}

if(isset($_POST["name"]))
{
    $filename = $folder_name.$_POST["name"];
    unlink($filename);
}

$result = array();

$files = scandir('upload');

$output = '';

if(false !== $files)
{
    foreach($files as $file)
    {
        if('.' !=  $file && '..' != $file)
        {
            $output .= '
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-3">
                        <img src="'.$folder_name.$file.'" alt="" width="64" onerror="this.src=\'assets/img/file.png\';">
                    </div> 
                    <div class="col-md-6">
                        '.$file.'
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button>
                        <a type="button" class="btn btn-link remove_image" href="upload/'.$file.'" download>İndir</a
                    </div>
                </div>
            </li>
   ';
        }
    }
}
echo $output;

?>
