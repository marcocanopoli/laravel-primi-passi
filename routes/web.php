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
    $data = [
        'menu' => [
            [
                'text' => 'Home',
                'url' => '/'
            ],
            [
                'text' => 'News',
                'url' => '/news'
            ],
            [
                'text' => 'Shop',
                'url' => '/'
            ],
            [
                'text' => 'About Us',
                'url' => '/'
            ]
        ]
    ];
    return view('home', $data);
});

Route::get('/news', function () {
    $data = [
        'menu' => [
            [
                'text' => 'Home',
                'url' => '/'
            ],
            [
                'text' => 'News',
                'url' => '/news'
            ],
            [
                'text' => 'Shop',
                'url' => '/'
            ],
            [
                'text' => 'About Us',
                'url' => '/'
            ]
        ]
    ];
    return view('news', $data);
});

Route::get('/partials/header', function () {
    
    return view('header');
});
Route::get('/partials/footer', function () {
    
    return view('footer');
});
