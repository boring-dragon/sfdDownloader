<?php

use Jinas\Downloader\Downloader;

require_once '../vendor/autoload.php';

$download = new Downloader;

//first param is the url and second param is the path to store the file
$download->downloadfile('https://www.belightsoft.com/products/imagetricks/img/intro-video-poster@2x.jpg', './');
