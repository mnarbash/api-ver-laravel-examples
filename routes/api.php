<?php

use App\Http\Controllers\Api\ResourceController;
use App\Http\Controllers\Api\V0TestController;
use App\Http\Controllers\Api\V1TestController;
use App\Http\Controllers\Api\V2ResourceController;
use App\Http\Controllers\Api\V2TestController;
use App\Http\Controllers\Api\V3TestController;
use App\Http\Controllers\Api\V5TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mnarbash\ApiVersioningByHeaderRequest\Helper\ApiVersioning;

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

Route::prefix('test')->group( function () {
    Route::get('func', ApiVersioning::UseApiMultiVersions(
        [
            '0'=> function () {
                return 'version 0 or default version';
            },
            'V1' => function () {
                return 'v1';
            },
            'V2' => function () {
                return 'v2';
            },
            'V3' => function () {
                return 'v3';
            },
            'V5' => function () {
                return 'v5';
            },
        ]
    ));

    Route::get('controller', ApiVersioning::UseApiMultiVersions(
        [
            '0'=> [V0TestController::class, 'index'],
            'V1' =>  [V1TestController::class, 'index'],
            'V2' =>  [V2TestController::class, 'index'],
            'V3' =>  [V3TestController::class, 'index'],
            'V5' =>  [V5TestController::class, 'index'],
        ]
    ));
    Route::resource('res', ApiVersioning::UseApiMultiVersions(
        [
            '0'=> ResourceController::class,
            'V2'=> V2ResourceController::class,
        ]
    ));
});
