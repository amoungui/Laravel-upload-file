<?php
namespace Scaffolder\FileUploader;

use Illuminate\Support\ServiceProvider;

class FileUploaderServiceProvider extends ServiceProvider{
    public function boot(){

    }    

    public function register(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'views', 'uploader');
        
    }
}
