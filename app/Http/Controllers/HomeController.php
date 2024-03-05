<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['title'] = 'Đào tạo lập trình web';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.home', $this->data);
    }
    public function products(){
        $this->data['title'] = 'Sản phẩm';
        return view('clients.products', $this->data);
    }
    public function getProducts(){
        $this->data['title'] = 'Thêm sản phẩm';
        return view('clients.add', $this->data);
    }
    public function postProducts(Request $request){
        dd($request);
    }
    public function putProducts(Request $request){
        dd($request);
    }
    public function getArr(){
        $contentArr = [
            'name' => 'Laravel',
            'lesson' => 'Khóa học lập trình Laravel',
            'academy' => 'Unicode Academy'
        ];
        return $contentArr;
    }
}