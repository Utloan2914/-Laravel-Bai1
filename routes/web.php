<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home1Controller;
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

//Client Route
Route::get('/', [HomeController::class, 'index']);

// Route::middleware('auth.admin')->prefix('categories')->group(function () {
//     //Danh sách chuyên mục 
//     Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

//     //Lấy chi tiết 1 chuyên mục (Áp duungj show form sửa chuyên mục)
//     Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

//     //Xử lý update chuyên mục
//     Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

//     //Hiển thị form add DL
//     Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    
//     //Xử lý thêm chuyên mục 
//     Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

//     //Xóa chuyên mục
//     Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

//     //Hiển thị form upload
//     Route::get('/upload', [CategoriesController::class, 'getFile']);

//     //Xử lý file
//     Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('categories.upload');
// });

Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);
Route::get('them-san-pham', [HomeController::class, 'getAdd']);
Route::post('them-san-pham', [HomeController::class, 'postAdd']);
Route::put('them-san-pham', [HomeController::class, 'putAdd']);

// Route::get('/demo-response', function() {
//     $contentArr = [
//         'name' => 'Laravel 8.x',
//         'lesson' => 'Khóa học lập trinh Laravel',
//         'academy' => 'Unicode Academy'
//     ];
//     return $contentArr;
// });

// Route::get('lay-thong-tin', [Home1Controller::class, 'getArr']);
// Route::get('/demo-response', function () {
//     // $contentArr = ['name' => 'Unicode', 'version' => 'Laravel 8.x', 'lesson' => 'HTTP Respon Laravel'];
//     // return $contentArr;
//     // return response() -> json ($contentArr)->header("Api-Key", '1234');

//     return view('clients.demo-test');
// })->name('demo-response');

// Route::post('/demo-response', function(Request $request){
//     if(!empty($request->username)){
//         // return redirect()->route('demo-response');
//         // return route('demo-response'); // truyền tên vào
//         return back()->withInput() -> with('mess', 'Validate thành công'); //lấy ra các danh sách vừa input
//     }
//     return redirect(route('demo-response'))-> with('mess', 'Validate không thành công'); // with -> truyền một thông báo
// });

Route::get('download-image', [Home1Controller::class, 'downloadImage'])->name('download-image');
Route::get('download-doc', [Home1Controller::class, 'downloadDoc'])->name('download-doc');

// Admin Route
// Route::middleware('auth.admin')->prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
// });