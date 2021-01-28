<?php

use Illuminate\Support\Facades\Route;
use App\Models\MojModel;

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

Route::view('/', 'stvari/prva');
Route::view('/druga', 'stvari/druga');

Route::get('/t/{xyz}', function ($prom) {return view('test',['prom' => $prom, 'dva' => 2]);});

Route::get('/make', function () { die(MojModel::factory()->count(2)->make());});

