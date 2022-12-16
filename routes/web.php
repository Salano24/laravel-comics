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
    $data =[
        'links' => config('footer_link.links'),
        'items' => config('footer_link.links2'),
        'nav_links' => config('header_link.menuNav'),
        'tumblers' => config('db.series'),
    ];

    return view('home', $data);
})->name('home');