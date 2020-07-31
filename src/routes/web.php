<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Scaffolder\FileUploader\Http\Controllers'], function(){
    Route::get('upload', 'UploaderController@getForm');
    Route::post('upload', 'UploaderController@postForm');
});

//Route::get('upload', 'Scaffolder\FileUploader\Http\Controllers\UploaderController@getForm');