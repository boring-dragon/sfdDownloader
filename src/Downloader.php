<?php

namespace Jinas\Downloader;

class Downloader
{
    /**
     * __construct
     *
     * @param  mixed $url
     * @param  mixed $path
     *
     * @return void
     */
    public function __construct($url, $path)
    {
        $this->download($zipFile = $this->makeFileName($path, $url), $url);
    }


    /* 
    Function that generates unique filename according to the time 
    */
    
    /**
     * makeFileName
     *
     * @param  mixed $path
     * @param  mixed $url
     *
     * @return void
     */
    private function makeFileName($path, $url)
    {
        //$storage_path = getcwd();

        $extension = $this->getFileExtensions($url);

        return $path . '/file_'.time(). '.'.$extension;
    }
    /* 
    Function that gets the file extention of the file passed as url
    */
    
    /**
     * getFileExtensions
     *
     * @param  mixed $url
     *
     * @return void
     */
    public function getFileExtensions($url)
    {

        $ext = pathinfo($url, PATHINFO_EXTENSION);
        return $ext;
       
    }

    /* 
    Function that takes care of downloading the file given a url
    */
    
    /**
     * download
     *
     * @param  mixed $fileName
     * @param  mixed $url
     *
     * @return void
     */
    private function download($fileName , $url)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);

        $file =  $response->getBody();

        file_put_contents($fileName, $file);
    }

    /* 
    Incase if the file is zip or any other file that needs extractions
    */
    private function extract()
    {

    }
}
