<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoriesController;
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
//Client Route

Route::get('/', function(){
    return '<h1 style="text-align: center;>Trang chủ unicode</h1>';
})->name('home');
Route ::prefix('categories')->group(function (){

    //Danh sách chuyên mục
    Route::get('/',[CategoriesController::class, 'index'])->name('categories.list');

    //Lấy chi tiết 1 chuyên mục( Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}',[CategoriesController::class, 'getCategory'])->name('categories.edit');

    //Xử lý update chuyên mục
    Route::get('/edit/{id}',[CategoriesController::class, 'updateCategory']);

    //Hiển thị form add dữ liệu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    //Xứ lý thêm chuyên mục
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    //Xóa chuyên mục
    Route::delete('/delete/{id}', [CategoriesController::class,'deleteCategory'])->name('categories.delete');
});

    //Admin route
    // Route::prefix('admin')->group(function () {
    //     Route::get('/', [DashboardController::class, 'index']);
    //     Route::resource('products', ProductsController::class);
    // });

    Route::middleware('auth.admin')->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
    });