<?php
$files = $_FILES['avatar'];
print_r($files); die;
/**
 * check file type (image/png, image/gif, image/jpeg)
 * check file size <= 100kb => 100*1024  
 * if 1 file is error => rollback all file upload
 */
$arrMimeType = ['image/png', 'image/gif', 'image/jpeg'];

foreach($files['type'] as $index => $type){
    $name = $files['name'][$index];
    if(!in_array($type, $arrMimeType)){
        die("File $name not allow!");
    }
    $size = $files['size'][$index];
    if($size > 102400){
        die("File $name too large!");
    }
}

foreach($files['tmp_name'] as $key=>$tmpName){
    $newName = time().'-'.$files['name'][$key];
    move_uploaded_file($tmpName, "avatar-user/$newName");
}
echo 'success';
?>