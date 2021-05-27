<?php
function handlingUploadFiles ()
{
    if (isset($_FILES['files'])) {
        $files = $_FILES['files'];
        //var_dump($files);
        for ($i = 0; $i < count($files['name']); $i++) {
            $name = $files['name'][$i];
            $tmp_name = $files['tmp_name'][$i];
            if ($name) {
                move_uploaded_file($tmp_name, './uploads/'.$i.time().$name);
            }
        }
    }
}

handlingUploadFiles();
?>