<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Trip;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/trips/{destino}', function($destino){
    $trips = Trip::where('destino', $destino)
    ->where('plazas', '<' , 4)
    ->get();
    foreach($trips as $trip){
        echo $trip;
        echo "<br>";
    }
});
