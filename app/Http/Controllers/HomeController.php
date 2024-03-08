<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
//use DB;
class HomeController extends Controller
{
    //action index
    public $data = [];
    public function index(){
        $this->data['title'] = "Đào tạo lập trình web";
        $this->data['message'] = "Đăng ký tài khoản thành công";
        $users = DB::select('SELECT * FROM users WHERE email=:email', ['email'=>'luyen.ho25@gmail.com']);
        dd($users);
       return view('clients.home', $this->data);

    }

    public function products(){
        $this->data['title'] = "Product";
       
        return view('clients.products', $this->data);


    }

    public function getAdd(){
        $this->data['title'] = "Add Product";

        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request){
        echo "Method PUT";
        dd($request);
    }

    public function putAll(Request $request){
        dd($request);
    }

    public function getNews(){
        return 'Danh sach tin tuc';
    }
    public function getCategory($id){
        return 'Chuyen muc: '.$id;
    }
    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }

    public function getArr(){
        $contentArr = [
            'name' => 'Laravel 10.x',
            'lesson' => 'Khoa hoc lap trinh Larave',
            'academy' => 'Unicode Academy'
        ];
        return $contentArr;
    }

// Tai anh ve
    public function downloadImage(Request $request){
       if (!empty($request->image)){
        $image = trim($request->image);
        // $fileName  = 'image.'.uniqid().'.jpg';
        $fileName = basename($image);
        
        // return response()->streamDownload(function() use ($image){
        //     $imageContent = file_get_contents($image);
        //     echo $imageContent;
        // },$fileName);
        return response()->download($image, $fileName);
       }
    }

    public function downloadDoc(Request $request){
        if (!empty($request->file)){
            $file = trim($request->file);
            $fileName = 'tai-lieu.'.uniqid().'.pdf';
            $header = [
                'Content-type'=>'application/pdf'
            ];
            return response()->download($file, $fileName, $header);
        }
    }
}

