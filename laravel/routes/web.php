<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $message = "Hello World!!!";
   

     return view("home", compact("message"));
})->name("homepage");


Route::get('/links', function () {
    $links = [
        'Homepage',
        'Contacts', 
        'About Us', 
        'More'
    ];
     return view("links.list", compact('links'));
})->name("links-list");

Route::get('/detail ', function (){
    return view("links.details");

})->name("details");