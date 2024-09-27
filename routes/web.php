<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/matic', function () {
    return view('matic');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/cub', function () {
    return view('cub');
});

Route::get('/ev', function () {
    return view('ev');
});

Route::get('/pressrelease', function () {
    return view('pressrelease');
});

Route::get('/racing', function () {
    return view('racing');
});

Route::get('/beat', function () {
    return view('beat');
});

Route::get('/beatstreet', function () {
    return view('beatstreet');
});

Route::get('/scoopy', function () {
    return view('scoopy');
});

Route::get('/pcx', function () {
    return view('pcx');
});

Route::get('/cbx', function () {
    return view('cbx');
});

Route::get('/cbr150', function () {
    return view('cbr150');
});

Route::get('/cbr250', function () {
    return view('cbr250');
});

Route::get('/crf250l', function () {
    return view('crf250l');
});

Route::get('/suprax125', function () {
    return view('suprax125');
});

Route::get('/gtr150', function () {
    return view('gtr150');
});

Route::get('/supercub125', function () {
    return view('supercub125');
});

Route::get('/ct125', function () {
    return view('ct125');
});

Route::get('/em1', function () {
    return view('em1');
});

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/genio', function () {
    return view('genio');
});

Route::get('/vario125', function () {
    return view('vario125');
});

Route::get('/vario160', function () {
    return view('vario160');
});

Route::get('/stylo160', function () {
    return view('stylo160');
});

Route::get('/adv160', function () {
    return view('adv160');
});

Route::get('/forza', function () {
    return view('forza');
});

Route::get('/verza', function () {
    return view('verza');
});

Route::get('/sonic', function () {
    return view('sonic');
});

Route::get('/streetfire', function () {
    return view('streetfire');
});

Route::get('/crf150l', function () {
    return view('crf150l');
});

Route::get('/st125dax', function () {
    return view('st125dax');
});

Route::get('/monkey', function () {
    return view('monkey');
});

Route::get('/crf250rally', function () {
    return view('crf250rally');
});

Route::get('/revo', function () {
    return view('revo');
});

Route::get('/corporate', function () {
    return view('corporate');
});

Route::get('/honda-em1', function () {
    return view('honda-em1');
});

Route::get('/crf-twin', function () {
    return view('crf-twin');
});

Route::get('/crosser-ahm', function () {
    return view('crosser-ahm');
});

Route::get('/optimis-raih', function () {
    return view('optimis-raih');
});

Route::get('/kalibrasi-kualitas', function () {
    return view('kalibrasi-kualitas');
});

Route::get('/crosser-astra', function () {
    return view('crosser-astra');
});

Route::get('/tunggangi-cbr', function () {
    return view('tunggangi-cbr');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/dealer', function () {
    return view('dealer');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
