<?php

$files = $_FILES['avatar'];
// print_r($files);
/**
 * check file type (image/png, image/gif, image/jpeg)
 * check file size <= 100kb => 100*1024  
 * if 1 file is error => rollback all file upload
 */
foreach($files['tmp_name'] as $key=>$tmpName){
    $newName = time().'-'.$files['name'][$key];
    move_uploaded_file($tmpName, "avatar-user/$newName");
}
echo 'success';
?>