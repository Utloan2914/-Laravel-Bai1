<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
     /*
     Nếu là trang danh sách chuyên mục=> hiển thị ra 
     dòng chữ: Xin chào unicode  
     */

    //  if ($request->is('categories')){
    //     echo '<h3>Xin chào unicode</h3>';
    //  }
    }
    public function index(Request $request){
        // if (isset($_GET['id'])){
        //   echo $_GET['id'];
        // }

        // $pash=$request->path();
        // echo $pash;

        // $allData = $request->all();
        // echo $request->all()['id'];
        // dd($allData);

        //$url = $request->url();

        // $fullUrl = $request->fullUrl();
        // echo $fullUrl;

        // $method=$request ->method();
        // echo $method;

          $ip = $request->ip();

          //echo 'IP là: '.$ip;
        // if($request->isMethod('GET')){
        //   echo 'Phương thức GET';
        // }

        // $server = $request->server();

        // dd($server['REQUEST_URL']);

        // $header = $request->header('user-agent');
        // dd ($header);

        // $id = $request->input('id');
        // echo $id;

        //$id = $request ->input('id.*.name');
        
        // $id=$request->id;
        // $name = $request->name;
        // dd($id);

        //dd(request()->id);


        // $query = $request->query();
        // dd();

        // $name = request('name', 'Unicode');
        // dd($name);

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
    public function addCategory(Request $request){
      // $pash=$request->path();
      // echo $pash;
      
      $cateName =$request->old('category_name','Mặc định');
      

        return view('clients/categories/add');
    }

      //Thêm dữ liệu vào chuyên mục (phương thức POST)
      public function handleAddCategory(Request $request){
        // $allData = $resquest->all();
        // dd($allData);
        

        // if($request->isMethod('POST')){
        //   echo 'Phương thức POST';
        // }

        //return redirect(route('categoryes.add'));
        //return 'Submit thêm chuyên mục';

        // $cateName = $request->id;
        // dd($cateName);

        //$cateName = $request->query();

        if ($request->has('category_name')){
          $cateName = $request->category_name;
          $request->flash(); //set session flash

          return redirect(route('categories.add'));
        }
        else{
          return 'Không có category_name';
        }
      }

      //Xóa dữ liệu (phương thức Delete)
      public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;

      }


      public function getFile(){
          return view('clients/categories/file');
      }
      //Xử lý lấy thông tin file 
      public function handleFile(Request $request){
          // $file = $request->file('');

      //Cách 2 
          // $file = $request->photo;
          // dd($file);

          if ($request->hasFile('photo')){
            if ($request->photo->isValid()){
              $file = $request->photo;
              //$path = $file->path();
              $ext =$file->extension();
              //$path = $file->store ('file-txt', 'local');
              //$path =$file->storeAs('file-txt', 'khoa-hoc.txt');
              
              // $fileName = $file->getClientOriginalName();
              
              //Đổi tên 
              $fileName = md5(uniqid()).'.'.$ext;
              dd($fileName);
            }
            else{
              return 'Upload không thành công';
            }
          }
          else{
            return 'Vui lòng chọn file';
          }


      }
}