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


Route::controller(CardController::class)->group(function() {
    
    // testimoni
    Route::get('/CardTestimoni', 'Testimoni');

    // project
    Route::get('/Project', 'Project');

    // create saran
    Route::post('/Saran', 'CreateSaran'); 

});


Route::group(['middleware' => ['auth:sanctum', 'checkRole:admin']], function (){

    Route::controller(CardController::class)->group(function() {

        // Create testimoni
        Route::post('/CreateTestimoni', 'CreateTestimoni');
        
        // hapus Testimoni
        Route::delete('/DeteleTestimoni/{id}', 'DeleteTestimoni');

        // create project
        Route::post('/Project', 'CreateProject');

        // edit Project
        Route::get('/Project/{id}', 'EditProject');
        
        // update project
        Route::put('/Project/{id}', 'UpdateProject');
        
        // delete project
        Route::delete('/Project/{id}', 'DeleteProject');
        
        // saran
        Route::get('/Saran', 'Saran');

    });

    // logout
    Route::get('/logout', [AuthController::class, 'logout']);

});
