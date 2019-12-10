# SfdDownloader

### Simple class to download files passed as a url
Examples on how to use this is given inside example folder. This class was originally created to simply just download a url link for my personal project. Codes might be a bit rough. Anyone is welcome to improve it :)

### To install
```
composer require jinas/sfddownloader

```

### Usage: 

```php
<?php
use Jinas\Downloader\Downloader;
require_once '../vendor/autoload.php';
$download = new Downloader;
//first param is the url and second param is the path to store the file
$download->downloadfile('https://www.belightsoft.com/products/imagetricks/img/intro-video-poster@2x.jpg', './');
```
