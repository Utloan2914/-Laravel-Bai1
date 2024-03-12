<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Whoops\Run;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MyOontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use Illuminate\Mail\Mailables\Content;
use PhpParser\Node\Stmt\Return_;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getProducts'])->name('addproduct');
Route::post('/them-san-pham', [HomeController::class, 'postProducts']);
Route::put('/them-san-pham', [HomeController::class, 'putProducts']);
// Route::get('/demo-response', function () {
//     $contentArr = [
//         'name' => 'Laravel',
//         'verson' => 'Laravel 8.0',
//         'academy' => 'Unicode academy'
//     ];
//     // return $contentArr;
//     return response()->json($contentArr, 404)->header('Api-Key', '1234');
// });
Route::get('/demo-response', function () {
    return view('clients.demo-test');
})->name('demo-response');
Route::post('/demo-response', function (Request $request) {
    if (!empty($request->username)) {
        // return redirect()->route('demo-response');
        return back()->withInput()->with('mess', 'Validate thành công');
    }
    return redirect(route('demo-response'))->with('mess', 'Validate không thành công');
});
Route::get('/download-image', [HomeController::class, 'dowloadImage'])->name('dowloadImage');
Route::get('/download-doc', [HomeController::class, 'dowloadPDF'])->name('dowloadPDF');



Route::prefix('/users')->name('users.')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::get('/add',[UserController::class,'add'])->name('add');
    Route::post('/add',[UserController::class,'postAdd'])->name('post-add');
});



//bài tập 12/3
// Route::get('/',function(){
//     return view('home',['name'=>"Hello, Loan huynh"]);
// })->name('home');

Route::get('/pnv1', function () {
    return view('home', ['name' => "<span><i style='color:green'>Loan</i></span>"]);
})->name('home');



