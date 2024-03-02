@extends('layouts.client')
@section('title')
    {{$title}}
@endsection


@section('content')
    <h1>Thêm sản phẩm</h1>
   <form action="" method="PUT">
    <input type="text" name="username">
    {{-- <input type="hidden" name ="_token" value="{{csrf_token()}}"> --}}
    
    <button type="submit">Submit</button>
    @csrf
    @method('PUT')
</form>
@endsection


@section('css')
    
    
@endsection

@section('js')
    
@endsection