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
        $this->loadViewsFrom(__DIR__.'/views', 'uploader');
        //define the path for the image config file
        $this->mergeConfigFrom(__DIR__.'/config/file.php', 'uploader');
        //define the file which are going to be publised
        $this->publishes([
            __DIR__.'/config/file.php' => config_path('file.php'),
        ]);
        
    }
}
