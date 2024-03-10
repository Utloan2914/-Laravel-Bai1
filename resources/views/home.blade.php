<h1>Trang chủ Unicode</h1>
<!-- <h2>{{$welcome}}</h2> -->
<!-- <h2>{{request()->keyword}}</h2> -->

<!-- Sử dụng toán tử 3 ngôi  -->
<h2> {{ !empty(request()->keyword)?request()->keyword: 'Không có gì' }} </h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div>

<hr>
@php 
    // $message = 'Đặt hàng thành công';
@endphp
@include('parts.notice')


<hr>
@php 
    $number = 5;
    if ($number>=10) {
        $total = $number + 20;
    }else{
        $total = $number + 10;
    }
@endphp
<h3>Kết quả: {{$number}} - {{$total}}</h3>

{{-- <script>
    Hello, @{{name}} // C1
</script> --}}

{{-- C2 --}}
@verbatim 
    <div class="container">
        Hello, {{className}}
    </div>
    <script>
        Hello, ((name))
        Hi, {{age}}
    </script>
@endverbatim

{{-- Include View --}}
