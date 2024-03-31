<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Quy ước với tên table
    /*
    tên model: Post => table: posts
    tên model: ProductCategory: product_categories
     */
    protected $table = 'posts';
    protected $primaryKey =false;
    public $timestamps = false;
    const CREATED_AT ='create_at';
    const UPDATED_AT = 'update_at';
    protected $attributes=[
        'status'=>0,
    ];
    // public $incrementting = false;
    // protected $keyType='string';
    //Quy ước khóa chính, mặc định laravel lấy filed id làm khóa chính
}
