<?php

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
    return view('welcome');
});

Route::get('/flexbox', function () {
    return view('csspractice.flexbox');
});

Route::get('/cardcss', function () {
    return view('csspractice.cardcss');
});

Route::get('/charts', function () {
    return view('charts.chart-graph');
});

Route::get('/charts-rocket-league', function() {
	$jeffrey = collect(['name' => 'Jeffrey', 'wins' => 50]);
	$taylor = collect(['name' => 'Taylor', 'wins' => 8]);

	return view('charts.rocket-league', compact('jeffrey', 'taylor'));
});

Route::get('/charts-stock', function () {
    return view('charts.chart-stock');
});

Route::get('/tags-input', function() {
	return view('tags-input');
});

