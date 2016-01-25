<?php
//routing w pakiecie
Route::group(['namespace'=>'Sandeve\Form\Controllers','prefix'=>'sandeve'],function(){
     Route::get('test', 'FormController@test');
});