<?php

if(isset($_REQUEST['file'])){
    $file = urldecode($_REQUEST['file']); //Decode Url Encode String

    /* test whwther the file name contains illegal characters */

    if(preg_match('/^[^.][a-z0-9_.]+[a-z]$/i', $file)){
        $filepath = "admin/materials/".$file;

        //process download
        if(file_exists($filepath)){
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); //Flush System Output Buffer
            readfile($filepath);
            die();
        }else{
            http_response_code(404);
            die();
        }
    }else{
        die('Invalid File Name');
    }
}
?>