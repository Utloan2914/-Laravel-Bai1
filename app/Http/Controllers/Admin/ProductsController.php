<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class ProductsController extends Controller 
{

    public function __construct(){
        //echo 'Product khởi động';
        //Sử dụng sesion để check login
    }
    
    
    /**
    * Display a listing of the resource.
    * 
    * @return Illuminate\Http\Response
    */
    public function index()
    {
        return 'Danh sách sản phẩm';
    }

    /**
    * Show the form for creating a new resource. 
    *
    *@return Illuminate\Http\Response
    */

    /*
    Hiển thị form thêm sản phẩm (Phương thức GET)
    */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illumninate\Http\Request $request
     * @return \Illumninate\Http\Response
     */

     /*
        Xử lý thêm sản phẩm phương thức POST)
    */

    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illumninate\Http\Response
     */

     //Lấy thông tin của 1 sản phẩm (Phương thức GET) 
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editting the specified resource.
     * 
     * @param int $id
     * @return \Iilluminate\Http\Respone
     */

     //Hiển thị form sửa sản phẩm (Phương thức GET)
    public function edit($id) 
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */

    //Xử lý sửa sản phẩm (PUT, PATCH)
    public function update (Request $request, $id)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */

    //Xử lý xóa sản phẩm
    public function destroy ($id)
    {
        //
    }
}