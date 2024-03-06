<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Bai 19

Route::get('demo-response', function(){
    //$contentArr = ['name' => 'Unicode', 'version' =>'Laravel 8.x', 'lesson'=>'HTTP Response Laravel'];
    //return $contentArr;
    //return response('',201)->json($contentArr,201)->header("Api-Key",'1234');
    //return '<h2>Welcome to Unicode</h2>';
    echo old('username');
    return view('clients.demo-test');
})->name('demo-respone');

Route::post('demo-response', function(Request $request ){
    if(!empty($request->username)){
        //return 'Co data';
        return back()->withInput()->with('mess','Validate thành công');
    }
        return redirect(route('demo-response'))->with('mess','Validate không thành công');

});
