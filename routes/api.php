<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/endpoint', function (Request $request) {
//     //
// });
//Route::get('/form', function () {
//    //$routes = collect(Route::getRoutes())->map(function ($route) {
//    //    return [
//    //        'uri' => $route->uri,
//    //        'as' => $route->action['as'] ?? '',
//    //        'methods' => $route->methods,
//    //        'action' => $route->action['uses'] ?? '',
//    //        'middleware' => $route->action['middleware'] ?? [],
//    //    ];
//    //});
//    //$entity = [];
//
//
//
//    return response()->json(['foo' => 'bar']);
//});

Route::post('/create', '\Arthurkushman\NovaApiGenerator\Http\Controllers\FormController@create');