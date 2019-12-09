<?php
    //b1
    $file_upload = $_GET['file_upload']; //hung du lieu tu url
    $file_path = 'upload/'.$file_upload; //mo file
    //b2
    //thong bao download file
    //header("Content-type: disposition: attachment; filename= $file_name"); //tai xuong
    //b3 trinh duyet tra ve dinh dang file
    header("Content-Type: application/pdf");
    //b4 doc file
    readfile($file_path);

?>