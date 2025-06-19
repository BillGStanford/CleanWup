<?php
$file = 'downloads/CleanWup.exe';

if (file_exists($file)) {
    // Update download count
    $count = file_exists('downloads.txt') ? (int)file_get_contents('downloads.txt') : 0;
    file_put_contents('downloads.txt', $count + 1);
    
    // Serve the file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="CleanWup.exe"');
    readfile($file);
    exit;
}
?>