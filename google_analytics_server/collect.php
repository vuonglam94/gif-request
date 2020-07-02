<?php
$collect_gif_file = dirname( __DIR__) . '/img/collect.gif';

/**
 * write log GET parameters
 */
$log_path = dirname( __DIR__) . '/log.txt';
$file_handle = fopen($log_path, 'a+') or die("Unable to open file!");
fwrite($file_handle, json_encode($_GET) . "\n");
fclose($file_handle);

if (file_exists($collect_gif_file)) {

   $image_info = getimagesize($collect_gif_file);

   //Set the content-type header as appropriate
   header('Content-Type: ' . $image_info['mime']);

   //Set the content-length header
   header('Content-Length: ' . filesize($collect_gif_file));

   //Write the image bytes to the client
   readfile($collect_gif_file);
}
else { // Image file not found

    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");

}
