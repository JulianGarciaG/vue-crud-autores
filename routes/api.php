<?php

use App\Http\Controllers\AutorController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get("check", function(){
    return response()->json(["active"=> true], Response::HTTP_OK);
});
Route::prefix("v1")->group(function () {
    Route::apiResource("tbl_autores", AutorController::class);
}); 