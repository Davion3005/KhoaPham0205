<?php
$avatar = $_FILES['avatar']; // return array
print_r($avatar);

/**
 * check file type ( image/png, image/gif, image/jpeg)
 * check file size <= 1 MB => 1024*1024  
 * rename file
 */

if($avatar['type'] == 'image/png'){
    
    move_uploaded_file($avatar['tmp_name'],'avatar-user/'.$avatar['name']);
    echo 'uploaded';
}
else{
    echo 'File not allow!';
    return;
}



?>