<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public $data =[];
    public function index(){
        $this->data['title'] ='Đào tạo lập trình web';
        return view('clients.home',$this->data);
    }

    public function product(){
        $this->data['title'] ='Sản phẩm';
        return view('clients.products',$this->data);
    }
}