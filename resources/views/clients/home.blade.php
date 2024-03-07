@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('sidebar')
{{-- @parent --}}
<h3>Home Sidebar</h3>
@endsection
@section('content')
<h1>Home Page</h1>
@datetime("2024-03-05 05:00:00")
@include('clients.contents.side')
@include('clients.contents.about')
@datetime("2024-03-05 05:00:00")

@env('production')
    <p>Môi trường Production</p>
@elseenv('test')
    <p>Môi trường Test</p>
@else
    <p>Môi trường Dev</p>
@endenv

<x-alert type="info" :content='$message' data-icon= "facebook" />
<p><img src="https://cdn.vn.alongwalk.info/wp-content/uploads/2023/03/17164026/image-123-hinh-anh-hoa-hong-do-tang-nguoi-yeu-lang-man-dep-tu-nhien-167902082699859.jpg" alt=""></p>

<p><a href="{{route('download-image').'?image='.('storage/z5200872043343_c527b682ea35379bb0b5a8aa104436e8.jpg')}}" class="btn btn-primary">Download img</a></p>

<p><a href="{{route('download-doc').'?file='.('storage/CV.pdf')}}" class="btn btn-primary">Download PDF</a></p>

@endsection

@section('css')
<style>
    img{
        max-width: 100%;
        height: auto;
    }
</style>

@endsection

@section('js')

@endsection