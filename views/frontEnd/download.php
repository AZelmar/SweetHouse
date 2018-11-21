<?php
if(isset($_GET["file"])){
    $filepath = "application-pdf/individual.pdf";
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="te"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
    else
    {
        echo $filepath;
    }
}
else
{
    echo 'test';
}
?>