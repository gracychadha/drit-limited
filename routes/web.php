<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('website.pages.welcome');})->name('home');
Route::get('/about-us', function () { return view('website.pages.about-us');})->name('about-us');
Route::get('/contact-us', function () { return view('website.pages.contact-us');})->name('contact-us');
Route::get('/our-clients', function () { return view('website.pages.our-clients');})->name('our-clients');
Route::get('/service-details', function () { return view('website.pages.service-details');})->name('service-details');
Route::get('/technology-details', function () { return view('website.pages.technology-details');})->name('technology-details');