<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 18/8/18
 * Time: 12:18 PM
 */
Route::group(['namespace' => 'Pawan\Vimeo\Http\Controllers','middleware' => ['web']], function () {
    Route::get('vimeo/listing', 'VimeoController@index')->name('vimeolisting');
    Route::get('vimeo/add', 'VimeoController@create')->name('addvideo');
    Route::post('vimeo/add', 'VimeoController@store');
});
