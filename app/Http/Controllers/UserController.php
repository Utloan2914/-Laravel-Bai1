<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   private $users;
   public function __construct()
   {
      $this->users = new Users();
   }
   public function index()
   {
    //$statement = $this->users->statementUser("DELETE FROM users");
      $title = 'Danh sách người dùng';
      $this->users->learnQueryBuilder();
      $userList = $this->users->getAllUser();
      return view('clients.users.lists', compact('title', 'userList'));
   }
   public function add()
   {
      $title = 'Thêm người dùng';

      return view('clients.users.add', compact('title'));
   }
   public function postAdd(Request $request)
   {
      $request->validate([
         'fullname' => 'required|min:5',
         'email' => 'required|email|unique:users'
      ], [
         'fullname.required' => 'Họ và tên bắt buộc phải nhập',
         'fullname.min' => 'Họ và tên phải từ :min trở lên',
         'email.required' => 'Email bắt buộc phải nhập',
         'email.email' => 'Email không đúng định dạng của email',
         'email.unique' => 'Email đã tồn tại trong hệ thống'
      ]);
      $dataInsert = [
         $request->fullname,
         $request->email,
         date('Y-m-d H:i:s')
      ];
      $this->users->addUser($dataInsert);
      return redirect()->route('users.index')->with('msg', 'thêm người dùng thành công');
   }
   public function getEdit(Request $request ,$id = 0)
   {
      $title = 'cập nhật người dùng';
      if (!empty($id)) {
         $userDetial = $this->users->getDetial($id);
         // dd($userDetial);
         if (!empty($userDetial[0])) {
            $request->session()->put('id', $id);
            $userDetial = $userDetial[0];
         } else {
            return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
         }
      } else {
         return redirect()->route('users.index')->with('msg', 'Liên kết không tồn tại');
      }
      return view('client.users.edit', compact('title', 'userDetial'));
   }
   public function postEdit(Request $request)
   {
      $id = session('id');
      if(!empty($id)){
         return back()->with('msg','Id không tồn tại');
      }
      $request->validate([
         'fullname' => 'required|min:5',
         'email' => 'required|email|unique.users,email'.$id
      ], [
         'fullname.required' => 'Họ và tên bắt buộc phải nhập',
         'fullname.min' => 'Họ và tên phải từ :min trở lên',
         'email.required' => 'Email bắt buộc phải nhập',
         'email.email' => 'Email không đúng định dạng của email',
         //  'email.unique' => 'Email đã tồn tại trong hệ thống'
      ]);
      $dataUpdate = [
         $request->fullname,
         $request->email,
         date('Y-m-d H:i:s')
      ];

      $this->users->updateUser($dataUpdate, $id);
      return back()->with('msg', 'Cập nhật người dùng');
   }
   public function delete($id = 0) {
      if (!empty($id)) {
         $userDetial = $this->users->getDetial($id);
         if (!empty($userDetial[0])) {
            $deleteStatus =  $this->users->deleteUser($id);
            if($deleteStatus){
               $msg = 'Xóa người dùng thành công';
            }
            else {
               $msg = 'Bạn không thể xóa người dùng';
            }

         } else {
            $msg = 'Người dùng không tồn tại';
         }
      } else {
         $msg = 'Liên kết không tồn tại';
      }
      return redirect()->route('users.index')->with('msg',$msg );
   }
}
