@extends ('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@if(session('msg'))
<div class='alert alert-success text-center'>
    session('msg')
</div>
@endif
@if($errors ->any())
    <div class= "alert alert-danger">
        Dữ liệu nhập sai, vui lòng nhập lại.
    </div>
@endif
<h1>{{$title}}</h1>
    <form action="{{route('users.post-edit')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" name="fullname" placeholder="Họ và tên.." value="{{ old('fullname') ?? ($userDetial->fullName ) }}">
            @error('fullname')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email.." value="{{old('email') ?? $userDetial->email}}">
            @error('email')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Nhóm</label>
            <select name="group_id" class ="form-control" id="">
                <option value="0">Chọn nhóm </option>
                @if(!empty($allGroups()))
                    @foreach($allCroups as $item)
                        <option value ="{{$item->id}}" {{old('group_id')==$item->id || $userDeatil->group_id==$item->id?'selected':false}}>{{$item->name}}</option>
                    @endforeach
                @endif
            </select>
            @error('group_id')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="">Trạng thái</label>
            <select name="status" class ="form-control" id="">
                <option value="0" {{old('status')==0 || $userDetail->status==0?'selected':false}}>Chưa kích hoạt </option>
                <option value="1" {{old('status')==1 || $userDetail->status==1?'selected':false}}>Kích hoạt </option>
            </select>
            @error('group_id')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{route('users.index')}}" class="btn btn-warning">Quay lại</a>
    </form>
@endsection
