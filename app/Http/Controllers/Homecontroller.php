<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;
class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Lập trình tại unicode';
        $this->data['message'] = "Đăng ký tài khoản thành công";
        return view('client.home', $this->data);
    }
    public function products()
    {
        $this->data['title'] = 'Sản phẩm';
        return view('client.products', $this->data);
    }
    public function getAdd()
    {
        $this->data['title'] = 'Thêm sản phẩm';
        $this->data['errorMessage'] = 'Vui lòng nhập thông tin  ';
        return view('client.add', $this->data);
    }
    public function postAdd(Request $request)
    {
        $rules = [
           'product_name' => ['required','min:6',new Uppercase],
            'product_price' => ['required','integer',new Uppercase]
        ];
        // $message = [
        //     'product_name.required' => 'Tên sản phẩm bắt buộc phải nhập',
        //     'product_name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
        //     'product_price.required' => 'giá sản phẩm bắt buộc phải nhập',
        //     'product_name.integer' => 'Giá sản phẩm phải là số'
        // ];
        $message = [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'integer' => ':attribute phải là số',
            //'uppercase' =>'Trường :attribute phải viết hoa'
        ];
        $attribute = [
            'product_name' => 'Tên sản phẩm',
            'product_price'=> 'Giá sản phẩm'
        ];
        $validator =  Validator::make($request->all(), $rules, $message,$attribute);
        $validator -> validate();
        if ($validator->fails()) {
            $validator->errors()->add('msg','Vui lòng kiểm tra dữ liệu');
            //return 'Thất bại';
        } else {
           // return 'Thành công';
           return redirect()->route('product')->with('msg','Validate thành công');
        };

        return back()->withErrors( $validator);
        // $request->validate($rules,$message);
        // Xử lý việc thêm dữ liệu vào database
    }
    public function putAdd(Request $request)
    {
        dd($request);
    }
    public function getArray()
    {
        $contentArray = [
            'name' => 'Laravel 8.x',
            'lesson' => 'Khóa học lập trình',
            'academy' => 'unicode academy'
        ];
        return $contentArray;
    }
    public function downloadImg(Request $request)
    {
        if (!empty($request->image)) {
            $fileName = 'image_' . uniqid() . 'jpg';

            $image = trim($request->image);
            return response()->streamDownload(function () use ($image) {
                $imageContent = file_get_contents($image);
                echo $imageContent;
            }, $fileName);
        }
    }
}
