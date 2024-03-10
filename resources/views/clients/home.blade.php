@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent {{-- Kế thừa từ phần cha bổ sung cho phần con  --}}
    <h3>Home Sidebar</h3>
@endsection
@section('content')
    @if (session('msg'))
    <div class="alert alert-{{session('type')}}">
        {{session('msg')}}
    </div>
    @endif

    <h1>Trang chủ</h1>
    @datetime('2024-3-2 21:45:00')
    @include('clients.contents.slide')
    @include('clients.contents.about')
    @datetime('2024-3-2 21:50:00')

    @env('production')
        <p>Môi trường production</p>
    @elseenv('test')
        <p>môi trường test</p>
    @else
        <p>Môi trường dev</p>
    @endenv

    <x-alert type="info" :content="$message" data-icon="youtube" />
    {{-- <x-inputs.button />
    <x-forms.button /> --}}
    <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREDKaFNDLN0eaxl6ZU48vHCZCMi5s7zPqIW-yLRZKyrk5Xz04_jUJOV-YTNROWsqON4S0&usqp=CAU"></p>
    <p><a href="{{route('download-image').'?image='. public_path('storage/image_65e9d29356363.jpg')}}" class="btn btn-primary">Download ảnh</a></p>
    <p><a href="{{route('download-doc').'?file='. public_path('storage/demo-pdf.pdf')}}" class="btn btn-primary">Download tài liệu</a></p>
@endsection

@section('css')
        <style>
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
@endsection

@section('js')
@endsection