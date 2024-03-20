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
        DB::enableQueryLog();
        //lấy tất cả bảng ghi của table
        $id=20;
        $lists=DB::table($this->table)
        ->select('fullname as hoten','email','id','update_at')
        // ->where('id',18)
        // ->where(function($query) use ($id){
        //     $query->where('id','<',$id)->orWhere('id','>',$id);

        // })
        //->where('fullname','like','%van quan%')
        // ->whereBetween('id', [18,20])
        // ->whereNotBetween('id', [18,20])
        // ->whereIn('id', [18,20])
        // ->whereNotIn('id', [18,20])
        // ->whereNull('update_at')
        ->whereNotNull('update_at')
        ->get();
        //->toSql();
        dd($lists);
        $sql=DB::getQueryLog();
        dd($sql);
        //Lấy 1 bản ghi đầu tiên của table
       $detail=DB::table($this->table)->first();
    }
}
