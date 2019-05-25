<?php
require_once '../function/index05.php';
$avatar = $_FILES['avatar']; // return array
// print_r($avatar);
/**
 * check file type ( image/png, image/gif, image/jpeg)
 * check file size <= 100kb => 100*1024  
 * rename file
 */


$arrMimeType = [
    'image/png',
    'image/gif',
    'image/jpeg'
];
if(in_array($avatar['type'], $arrMimeType)){
    if( $avatar['size'] <= 100*1024 ){ //100kb

        $newName = randomString(10).'-'.time().'-'.$avatar['name'];
        move_uploaded_file(
            $avatar['tmp_name'],
            'avatar-user/'.$newName
        );
        echo 'uploaded';
    }
    else{
        echo 'File too large!';
        return;
    }
}
else{
    echo 'File not allow!';
    return;
}



?>