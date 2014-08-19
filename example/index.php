<?php
include "../vendor/autoload.php";

$detector = new JeyKeu\PHPFaces\PHPFaces('detection.dat');
$detector->faceDetect('lena512color.jpg');
//$detector->toJpeg();
