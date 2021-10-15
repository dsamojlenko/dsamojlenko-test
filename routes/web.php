<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller

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



Route::get('/', [Controller::class, 'index']);

Route::post('/update', function(Request $request) {
    switch($request->action) {
        case 'moveup':
            // move up

            break;
        case 'movedown':
            // move down
            break;
        case 'delete':
            // delete

            foreach($array as &$item) {
                unset($item['id']);
            }
            break;
        default:
            redirect()->back()->with('error', 'No action submitted');
    }

    return redirect()->back();


});