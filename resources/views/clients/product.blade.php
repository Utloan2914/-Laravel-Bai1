@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

{{-- @section('sidebar')
    @parent
    <h3>Product Sidebar</h3>
@endsection --}}

@section('content')
    <h1>Sản phẩm</h1>

    @push('scripts')
    <script>
        console.log('Push lần 2');
    </script>
        
    @endpush
@endsection

@section('css')
@endsection

@section('js')
 {{-- <script>
    console.log('ok');
</script>    --}}

@endsection

@prepend('scripts')
    <script>
        console.log('Push lần 1')
    </script>
@endprepend