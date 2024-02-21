<?php


use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function () {
//     return view('home');


    // $user= new User();
    // $allUser= $user::all();
    // dd($allUser);
// });


// Route::get('/product', function () {
//     return view('product');
// });




// Route::get('/', function(){
//     $html = '<h1>Học lập trình tại Unicode</h1>';
//     return $html;
// });


// Route::get('/home', function () {
//     return 'Phương thức Get của path /home';
// });
// Route::get('/home', function () {
//     //return 'Phương thức Get của path /home';
//     return view('form');
// });






// Route::post('/home', function(){
//     return 'Phương thức Post của path /home';
// });


// Route::put('/home', function(){
//     return 'Phương thức Put của path /home';
// });


// Route::delete('/home', function(){
//     return 'Phương thức Delete của path /home';
// });


// Route::patch('/home', function(){
//     return 'Phương thức Patch của path /home';
// });


// Route::match(['get','post'], 'home', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });




// Route::any('home', function(Request $request){
    // $request=new Request();
//     return $request->method();
// });
// khi run chương trình thì chạy show-form


// Route::redirect('home', 'show-form');
// Route::redirect('home', 'https://google.com');




//Route::redirect('home', 'show-form',301); //search: http respone code


// Route::view('show-form', 'form');


// Route::get('/home', function(){
//     return 'Phương thức Get của path /home';
// });


// Route::get('show-form', function(){
//     return view('form');
// });


// Route::get('/',function(){
//     return view('home');
// })->name('home');


Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
//Route::get('/tin-tuc','App\Http\Controllers\HomeController@getNews')->name('news');
Route::get('/tin-tuc','HomeController@getNews')->name('news');
Route::get('/chuyen-muc', [HomeController::class, 'getCategories']);

Route::prefix('admin')->group(function(){
    // Route::get('/home', function(){
    //     return 'Phương thức Get của path /home';
    // });
   
//Bài 5


    // Route::get('tin-tuc/{slug}-{id}.html', function($chuoi, $maso ){
    //     $content= 'Phương thức Get của path /home với tham số: ';
    //     $content.='id = '.$maso.'<br/>';
    //     $content.= 'slug ='.$chuoi;
    //     return $content;
    // });


//Trường hợp không bắt buột điều kiện dùng dấu ?


    // Route::get('tin-tuc/{id?}/', function($chuoi, $maso ){
    //     $content= 'Phương thức Get của path /home với tham số: ';
    //     $content.='id = '.$maso.'<br/>';
    //     return $content;
    // });


//Trường hợp sử dụng tham số cho url


    // Route::get('tin-tuc/{id?}/{slug?}', function($maso=null, $slug=null ){
    //     $content= 'Phương thức Get của path /home với tham số: ';
    //     $content.='id = '.$maso.'<br/>';
    //     $content.='slug = '.$slug;
    //     return $content;
    // });


//


    Route::get('tin-tuc/{id?}/{slug?}.html', function( $id=null, $slug=null ){
            $content= 'Phương thức Get của path /home với tham số: ';
            $content.='id = '.$id.'<br/>';
            $content.= 'slug ='.$slug;
            return $content;
        // })->where(
        //     [
        //         //'slug'=> '[a-z-]+',
        //         'slug'=> '.+',
        //         'id'=> '[0-9]+'
        //     ]
        // );    
            })->where('id','[0-9]+')->where('slug', '.+')->name('admin.tintuc');






    // Route::get('show-form', function(){
    //     return view('form');
    // });


    Route::get('show-form', function(){
        return view('form');
    })->name('admin.show-form');


    Route::prefix('products')->middleware('checkpermission')->group(function(){
        Route::get('/', function(){
            return 'Danh sách sản phẩm';


        });


        Route::get('add', function(){
            return 'Thêm sản phẩm';
        })->name('admin.products.add');
        Route::get('/edit', function(){
            return 'Sửa sản phẩm';
        });
        Route::get('/delete', function(){
            return 'Xóa sản phẩm';
        });
    });
});