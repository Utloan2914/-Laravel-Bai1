<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUser(){
        $users = DB::select('SELECT * from users ORDER BY created_at DESC');
        return $users;
    }

    public function addUser($data){
        Db::insert('INSERT INTO users (fullname,email,create_at) value (?,?,?)',$data);
    }
    public function getDetial($id){
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }
    public function updateUser($data,$id){
        $data = array_merge($data,[$id]);
        return DB::update('UPDATE '.$this->table.' SET fullname =?,email =?, update_at= ? where id=?', $data);
    }
    public function deleteUser($id){
      return  DB::delete("DELETE FROM $this->table WHERE id=? ",[$id]);
    }
    public function statementUser($sql){
        return DB::statement($sql);
    }
    public function learnQueryBuilder(){
        //lấy tất cả bảng ghi của table
        $lists=DB::table($this->table)
        //->where('id','<>',18)
        ->select('fullname as hoten','email','id')
        // ->where('id',19)

        // ->where([
        //     ['id','>=',19],
        //     ['id','<=',20]
        // ])
            ->where('id',19)
            ->orwhere('id',20)
        // ->where([
        //     'id'=>19,
        //     'fullname'=>'Tố Loan'
        // ])
        ->get();
        dd($lists);
        //Lấy 1 bản ghi đầu tiên của table
       $detail=DB::table($this->table)->first();
    }
}
