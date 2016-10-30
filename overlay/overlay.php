<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: image/png");


$req_uri=$_SERVER["REQUEST_URI"];
$script = $_SERVER["SCRIPT_NAME"];
$profile_url = substr($req_uri, strlen($script)+1);

$stepdown  = imagecreatefrompng("img/stepdown180x180.png");

// Load
$profile  = imagecreatefromjpeg($profile_url);
$profile180 = imagecreatetruecolor(180, 180);

// Resize
imagecopyresized($profile180, $profile, 0, 0, 0, 0, 180, 180, 100, 100);


imagecopymerge($profile180, $stepdown, 0, 0, 0, 0, 180, 180, 70);

imagepng($profile180);

imagedestroy($profile180);
imagedestroy($stepdown);

?>