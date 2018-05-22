<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Schema::table('users', function (Blueprint $table) {
     $table->char('api_token', 60)->nullable()->after('remember_token');
});

as a GET parameter named api_token
as an Authorization header (Authorization: Bearer [api_token])
or as an auth password

$guzzle = new GuzzleHttp\Client();
$guzzle->request($url, ['api_token' => $api_token]);
$guzzle->request($url, [], ['headers' => ['Authorization' => 'Bearer ' . $api_token]]);
$guzzle->request($url, [], ['auth' => [$username, $api_token]]);
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
