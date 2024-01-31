<?php

use App\Models\Profile;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::get('/abc', function() {
        dd('this');
        $columns = ['name', 'email'];
        $items = [
            ['Thuta',  'thuta@jfdkls'],
            ['Htet', 'htet@jfdkl'],
        ];

        foreach ($items as $item) {
            Profile::create(array_combine($columns, $item));
        };
    });
});
