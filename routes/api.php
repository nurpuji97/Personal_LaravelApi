<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CardController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// login
Route::post('/login', [AuthController::class, 'login']);

// testimoni
Route::get('/CardTestimoni', [CardController::class, 'Testimoni']);

// project
Route::get('/Project', [CardController::class, 'Project']);

// create saran
Route::post('/Saran', [CardController::class, 'CreateSaran']);


Route::group(['middleware' => ['auth:sanctum', 'checkRole:admin']], function (){

    // Create testimoni
    Route::post('/CreateTestimoni', [CardController::class, 'CreateTestimoni']);

    // hapus Testimoni
    Route::delete('/DeteleTestimoni/{id}', [CardController::class, 'DeleteTestimoni']);


    // create project
    Route::post('Project', [CardController::class, 'CreateProject']);

    // edit Project
    Route::get('Project/{id}', [CardController::class, 'EditProject']);

    // update project
    Route::put('Project/{id}', [CardController::class, 'UpdateProject']);

    // delete project
    Route::delete('Project/{id}', [CardController::class, 'DeleteProject']);


    // saran
    Route::get('/Saran', [CardController::class, 'Saran']);


    // logout
    Route::get('/logout', [AuthController::class, 'logout']);

});
