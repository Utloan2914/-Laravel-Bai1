<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct() {
        // echo 'Khởi động';
        // Sử sụng sesion để check login
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        //
        return 'Danh sách sản phẩm';
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response 
     */

    // Hiển thị form thêm sản phẩm (Phương thức GET)
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @return \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response 
     * 
     */

    // Xử lý thêm sản phẩm (Phương thức POST)
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response 
     */

    // Lấy ra thông tin của 1 sản phẩm (Phương thức GET)
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response 
     */

    // Hiện thị form sửa sản phẩm (Phương thức GET)
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @return \Illuminate\Http\Request $request 
     * @param int $id
     * @return \Illuminate\Http\Response 
     */

    //  Xử lý sửa sản phẩm (Phương thức PUT, PATCH)
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response 
     */

    // Xử lý xóa sản phẩm 
    public function destroy($id)
    {
        //
    }
}
