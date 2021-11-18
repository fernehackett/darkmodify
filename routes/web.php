<?php

Route::group(['middleware'=>["verify.shopify", "billable"]], function () {
    Route::get('/', "Shopify\DashboardController@index")->name("home");
    Route::group(["as"=>"shopify.","namespace"=>"Shopify"], function(){
        Route::post("stores", "StoreController@store")->name("stores.store");
    });
});
Route::get('policy', 'HomeController@policy')->name("policy");
Route::get('script-tags.js', 'HomeController@getScriptTags')->name("public.script-tags");
