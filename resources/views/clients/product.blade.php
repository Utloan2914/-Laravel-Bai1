@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    {{-- @parent --}}
    <h3>Product Sidebar</h3>
@endsection
@section('content')
    <h1>Sản phẩm</h1>
@endsection

@section('css')
    <style>
        header{
            background:red;
            color:#fff;
        }
    </style>
    
@endsection

@section('js')
    
@endsection