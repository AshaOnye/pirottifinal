<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('team');
}) ->name('team');

Route::get('/projects', function () {
    return view('projects');
}) ->name('projects');

Route::get('/companies', function () {
    return view('companies');
}) ->name('companies');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');

Route::get('/palms', function () {
    return view('palms');
}) ->name('palms');

Route::get('/emporio', function () {
    return view('emporio');
}) ->name('emporio');

Route::get('/villa8', function () {
    return view('villa8');
}) ->name('villa8');

Route::get('/appointment', function () {
    return view('appointment');
}) ->name('appointment');

Route::get('/corporate', function () {
    return view('corporate');
}) ->name('corporate');
