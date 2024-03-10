<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request){
        /*
        Nếu là trang danh sách chuyên mục => Hiện thị ra dòng chữ 'xin chào unicode'
        */
        // if ($request->is('categories')){
        //     echo '<h3>Xin chào unicode</h3>';
        // }
    }
    
    //Hiển thị danh sách chuyên mục (Phương thức GET)
    public function index(Request $request){
        // if(isset($_GET['id'])){
        //      echo $_GET['id'];
        // }

        // 1. Phương thức $request->all();
        // $allData = $request->all();
        // echo $allData['id'];
        // dd($allData);
        
        // 2. Phương thức $request->path();
        // $path = $request->path();
        // echo $path;

        // 4. Phương thức $request->url() & $requét->fullUrl();
        // $url = $request->url(); // Nó sẽ lấy những thông tin trước dấu ? (Lấy pthức, gthức và tên miền, path)
        // $fullUrl = $request->fullUrl(); // Lấy tất cả các thông tin trên URL
        // echo $fullUrl;

        // 5. Phương thức $request->methid();
        // $method = $request->method(); // Kiểm tra phương thức đang sd
        // echo $method;
        // if($request->isMethod('GET')){
        //     echo 'Phương thức GET';
        // }

        // 6. Phương thức $request->ip();
        // $ip = $request->ip();
        // echo 'IP là: '.$ip;

        // 7. Phương thức $request->server(); ->Lấy tt của biến $server và trả về array
        // $server = $request->server();
        // dd($server['REQUEST_URI']);

        // 8. Phương thức $request->header(); -> Lấy tt của header 
        // $header = $request->header();
        // dd($header);

        // 8. Phương thức $request->input();
        // $input = $request->input();
        // dd($input);

        // $id = $request->input('id')['0']; // Trả về array/ từng phần tử của array 
        // dd($id);

        // $id = $request->input('id.1.email'); //đối với 2 chiều ->/categories?id[][name]=nguyen+hoai&id[][email]=hoai@gmail.com
        // $id = $request->input('id.*.name'); //Lấy tên nhiều mảng
        // dd($id);

        // 9. Phương thức $request->name();
        // $id = $request->name; // Hiển thị ra tt muốn lấy (name/id)
        // dd($id);

        dd(request()->id);
        $name = request('name'); //categories?id[]=1&id[]=2&name=hoai
        dd($name);
        return view('clients/categories/list');
    }

    //Lấy ra một chuyên mục theo id (Phương thức GET)
    public function getCategory($id){
        return view('clients/categories/edit');
    }

    //Sửa một chuyên mục (Phương thức POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục: '.$id;
    }

    //Show form thêm DL (Phương thức GET)
    public function addCategory(Request $request){
        // $path = $request->path();
        // echo $path;
        //$cateName = $request->old('category_name');
        return view('clients/categories/add');
    }
    
    //Thêm DL vào chuyên mục (Phương thức POST)
    public function handleAddCategory(Request $request){
        // $allData = $request->all();
        // dd($allData);

        // if($request->isMethod('POST')){
        //     echo 'Phương thức POST';
        // }
        // print_r($_POST);
        // return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';

        // 10. Phương thức $request->query(); 
        // $cateName = $request->query(); 
        // dd($cateName);

        // 11. Phương thức $request->has();
        // if ($request->has('category_name')){
        //     $cateName = $request->category_name;
        //     dd($cateName);
        // }else{
        //     return 'Không có category_name';
        // }

        // 12. Phương thức $request->flash();-> Đưa all DL input vào trong session. Nó chỉ tồn tại trong tg ngắn khi nó đã hiển thị ra rồi -> load -> sẽ mất
        if ($request->has('category_name')){
            $cateName = $request->category_name;
            $request->flash(); //set session flash 
            return redirect(route('categories.add'));
        }else{
            return 'Không có category_name';
        }
    }

    //Xóa DL (Phương thức DELETE)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;
    }

    public function getFile(){
        return view('clients/categories/file');
    }

    //Xử lý lấy thông tin file 
    public function handleFile(Request $request){
        // $file = $request->file('photo');

        // Kiểm tra file đã được đẩy lên server chưa 
        if($request->hasFile('photo')){
            if($request->photo->isValid()){   // isValid -> Ktra file đã upload thành công chưa 
                $file = $request->photo;
                // $path = $file->path();
                $ext = $file->extension();  // Lấy tt đuôi image
                // $path = $file->store('images'); // Mục đích sex lưu image từ server -> local (storate/add/images)
                // $path = $file->storeAs('images', 'anh1.png'); // Phương thức storeAs -> đổi tên thành 1 tên khác
                // dd($path);

                // Lấy tên gốc file khi mh chọn 
                $fileName = $file->getClientOriginalName();
                dd($fileName);

                // Đổi tên 
                // $fileName = md5(uniqid()). '.' .$ext;
            }else{
                return 'Upload không thành công';
            } 
        }else{
            return 'Vui lòng chọn file';
        }
    }
}
