<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Scaffolder\FileUploader\Http\Controllers'], function(){
    Route::get('todo/list', 'UploaderController@getView');
});
