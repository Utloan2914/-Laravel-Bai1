{{-- Bai 19 --}}
<h2>Demo View Unicode</h2>
@if(session('mess'))
<div class="alert alert-success">
    {{session('mess')}}
</div>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Username" value="{{old('username')}}">
    <button type ="submit">Submit</button>
    @csrf
</form>