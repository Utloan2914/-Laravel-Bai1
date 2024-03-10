@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')
    <h1 class="">Thêm sản phẩm</h1>
    <form action="" method="POST">
        @error('msg')
            <div class="alert alert-danger text-center">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="" >Tên sản phẩm</label>
            <input type="text" class="form-control" name="product_name" aria-placeholder="Têm sản phẩm.." value="{{old('product_name')}}"/>
            @error('product_name')
                <span style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" >Giá sản phẩm</label>
            <input type="text" class="form-control" name="product_price" aria-placeholder="Giá sản phẩm.." value="{{old('product_price')}}"/>
            @error('product_price')
            <span style="color: red;">{{$message}}</span>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
        @csrf
        {{-- @method('PUT') --}}
    </form>
@endsection

@section('css')
@endsection

@section('js')
@endsection