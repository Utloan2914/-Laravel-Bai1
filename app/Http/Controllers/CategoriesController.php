<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    //
    public function __construct()
    {
     
    //Hiển thị danh sách chuyên mục (Phương thức GET)
    }
    public function index(){
        return view('clients/categories/list');
    }

    //Lấy ra một chuyên mục theo id (Phương thức GET)
    public function getCategory($id){
        //return 'Chi tiết chuyên mục'.$id;

        return view('clients/categories/edit');
    
    }

    //Sửa 1 chuyên mục (phương thức POST)
    public function upadetCategory ($id){
        return 'Submit sửa chuyên mục: '.$id;

    }

     //Show form thêm dữ liệu
     public function showCategory() {

     }

    //Thêm dữ liệu vào chuyên mục (phương thức POST)
    public function addCategory(){
        //return 'Form thêm chuyên mục';

        return view('clients/categories/add');
    }

      //Thêm dữ liệu vào chuyên mục (phương thức POST)
      public function handleAddCategory(){
        return redirect(route('categoryes.add'));
        //return 'Submit thêm chuyên mục';
      }

      //Xóa dữ liệu (phương thức Delete)
      public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;

      }
}