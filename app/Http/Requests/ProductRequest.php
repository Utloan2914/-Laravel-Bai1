<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ProductRequest extends FormRequest
{
/** Determine if the user is authorized to make this request.
*
* @return bool
*/
public function authorize()
{
    return true;
}

/**
 * Get the validation rules that apply to the request.
*
* @return array
*/
public function rules()
{
    return [
        'product_name'=>'required|min:6',
        'product_price'=>'required|integer'
    ];
}
public function messages(){
    return [
        // 'required'=>'Trường :attribute bắt buộc phải nhập',
        // 'min'=>'Trường :attribute không được nhỏ hơn :min ký tự',
        // 'integer'=>'Trường :attribute phải là số'

        // 'product_name.required'=>'Tên sản phẩm attribute bắt buộc phải nhập',
        // 'product_name.min'=>'Tên sản phẩm không được nhỏ nhơn :min ký tự',
        // 'product_price.required'=>'Giá sản phẩm bắt buộc phải nhập',
        // 'product_price.integer'=>'Giá sản phẩm phải là số'
    
    
        'product_name.required'=>' :attribute bắt buộc phải nhập',
            'product_name.min'=>' :attribute không được nhỏ nhơn :min ký tự',
            'product_price.required'=>' :attribute bắt buộc phải nhập',
            'product_price.integer'=>' :attribute phải là số'
    ];
}
    public function attributes(){
        return [
            'product_name'=>'Tên sản phẩm',
            'product_price'=>'Giá sản phẩm'
        ];
    }
    
}
