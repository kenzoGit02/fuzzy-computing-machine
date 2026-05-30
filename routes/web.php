<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/test', function(Request $request){
    Log::info('Received POST request with'. print_r($request->input(), true));
    return response()->json(['status' => 'ok']);
});
